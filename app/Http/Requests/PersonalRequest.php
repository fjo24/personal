<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonalRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'FIRST_NAME'         => 'max:50|required',
            'SECOND_NAME'        => 'max:50|required',
            'first_LAST_NAME'    => 'max:50|required',
            'SECOND_LAST_NAME'   => 'max:50|required',

            'SALARY'             => 'numeric',
            'SOLD_MIN'           => 'numeric',
            'DISCCOUNT'          => 'numeric',

            'EFFECTIVE_END_DATE' => 'required|date|after:EFFECTIVE_START_DATE',

            'COUNTY'             => 'max:50|required',
            'ADDRESS'            => 'max:50|required',

        ];
    }
}
