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

            'FIRST_NAME'           => 'max:50|required',
            'SECOND_NAME'          => 'max:50|required',
            'first_LAST_NAME'      => 'max:50|required',
            'SECOND_LAST_NAME'     => 'max:50|required',
            'SEX'                  => 'required',
            'EMPLOYEE_NUMBER'      => 'required',
            'DATE_OF_BIRTH'        => 'required|date',
            'TELEF1'               => 'required',
            'TELEF2'               => 'numeric|required',
            'EMAIL_ADDRESS'        => 'required',

            'SALARY'               => 'numeric|required|between:100,1000|integer',
            'SOLD_MIN'             => 'numeric|required|max:500|integer',
            'DISCCOUNT'            => 'numeric|required|max:100|integer',

            'EFFECTIVE_END_DATE'   => 'required|date|after:EFFECTIVE_START_DATE',
            'EFFECTIVE_START_DATE' => 'required|date',

            'COUNTRY'               => 'max:50|required',
            'ADDRESS'              => 'max:50|required',

        ];
    }
}
