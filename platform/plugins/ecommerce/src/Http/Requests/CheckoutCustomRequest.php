<?php

namespace Platform\Ecommerce\Http\Requests;

use Platform\Ecommerce\Enums\ShippingMethodEnum;
use Platform\Payment\Enums\PaymentMethodEnum;
use Platform\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class CheckoutCustomRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     */
    public function rules()
    {
        $rules = [
            'payment_method'  => 'required|' . Rule::in(PaymentMethodEnum::values()),
            'shipping_method' => 'required|' . Rule::in(ShippingMethodEnum::values()),
            // 'amount'          => 'required|min:0',
            'name' => 'required|min:3|max:120',
            'phone' => 'required|numeric',
            'city' => 'required',
            'address' => 'required',
        ];

        $rules = apply_filters(PROCESS_CHECOUT_RULES_REQUEST_ECOMMERCE, $rules);

        return $rules;
    }

    /**
     * @return array
     */
    public function messages()
    {
        $messages = [
            'name.required'    => trans('plugins/ecommerce::order.address_name_required'),
            'phone.required'   => trans('plugins/ecommerce::order.address_phone_required'),
            'city.required'    => trans('plugins/ecommerce::order.address_city_required'),
            'address.required' => trans('plugins/ecommerce::order.address_address_required'),
        ];

        $messages = apply_filters(PROCESS_CHECOUT_MESSAGES_REQUEST_ECOMMERCE, $messages);
        dd($messages);

        return array_merge(parent::messages(), $messages);
    }
}
