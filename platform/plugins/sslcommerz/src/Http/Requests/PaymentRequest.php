<?php

namespace Platform\SslCommerz\Http\Requests;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class PaymentRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tran_id'  => 'required',
            'amount'   => 'required',
            'currency' => 'required',
            'value_a'  => 'required',
            'value_b'  => 'required',
        ];
    }
}
