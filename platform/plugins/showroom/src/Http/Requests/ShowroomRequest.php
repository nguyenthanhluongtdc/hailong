<?php

namespace Platform\Showroom\Http\Requests;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class ShowroomRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address'   => 'required',
            'phones'   => 'required',
            'url_google_map'   => 'required',
            'region'   => 'required',
            'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
