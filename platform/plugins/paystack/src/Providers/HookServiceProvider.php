<?php

namespace Platform\Paystack\Providers;

use Platform\Ecommerce\Repositories\Interfaces\OrderAddressInterface;
use Platform\Payment\Enums\PaymentMethodEnum;
use Html;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Paystack;
use Throwable;
use Illuminate\Support\Arr;

class HookServiceProvider extends ServiceProvider
{
    public function boot()
    {
        add_filter(PAYMENT_FILTER_ADDITIONAL_PAYMENT_METHODS, [$this, 'registerPaystackMethod'], 16, 2);
        $this->app->booted(function () {
            add_filter(PAYMENT_FILTER_AFTER_POST_CHECKOUT, [$this, 'checkoutWithPaystack'], 16, 2);
        });

        add_filter(PAYMENT_METHODS_SETTINGS_PAGE, [$this, 'addPaymentSettings'], 97, 1);

        add_filter(BASE_FILTER_ENUM_ARRAY, function ($values, $class) {
            if ($class == PaymentMethodEnum::class) {
                $values['PAYSTACK'] = PAYSTACK_PAYMENT_METHOD_NAME;
            }

            return $values;
        }, 21, 2);

        add_filter(BASE_FILTER_ENUM_LABEL, function ($value, $class) {
            if ($class == PaymentMethodEnum::class && $value == PAYSTACK_PAYMENT_METHOD_NAME) {
                $value = 'Paystack';
            }

            return $value;
        }, 21, 2);

        add_filter(BASE_FILTER_ENUM_HTML, function ($value, $class) {
            if ($class == PaymentMethodEnum::class && $value == PAYSTACK_PAYMENT_METHOD_NAME) {
                $value = Html::tag('span', PaymentMethodEnum::getLabel($value),
                    ['class' => 'label-success status-label'])
                    ->toHtml();
            }

            return $value;
        }, 21, 2);
    }

    /**
     * @param string $settings
     * @return string
     * @throws Throwable
     */
    public function addPaymentSettings($settings)
    {
        return $settings . view('plugins/paystack::settings')->render();
    }

    /**
     * @param string $html
     * @param array $data
     * @return string
     */
    public function registerPaystackMethod($html, array $data)
    {
        return $html . view('plugins/paystack::methods', $data)->render();
    }

    /**
     * @param Request $request
     * @param array $data
     */
    public function checkoutWithPaystack(array $data, Request $request)
    {
        if ($request->input('payment_method') == PAYSTACK_PAYMENT_METHOD_NAME) {
            $orderIds = (array) $request->input('order_id', []);
            $orderId = Arr::first($orderIds);
            $orderAddress = $this->app->make(OrderAddressInterface::class)->getFirstBy(['order_id' => $orderId]);

            $response = Paystack::getAuthorizationResponse([
                'reference' => Paystack::genTranxRef(),
                'quantity'  => 1,
                'currency'  => $request->input('currency'),
                'amount'    => (int)$request->input('amount') * 100,
                'email'     => $orderAddress ? $orderAddress->email : 'no-email@domain.com',
                'metadata'  => json_encode(['order_id' => $orderIds]),
            ]);

            if ($response['status']) {
                header('Location: ' . $response['data']['authorization_url']);
                exit;
            }
        }

        return $data;
    }
}
