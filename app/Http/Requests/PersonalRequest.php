<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class PersonalRequest extends Request
{

    public function __construct(Route $route)
    {
        $this->route = $route;
    }    

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {     
        $id = Request::segment(3);

        return [
            
            'FIRST_NAME'           => 'max:50|required',
            'SECOND_NAME'          => 'max:50|required',
            'first_LAST_NAME'      => 'max:50|required',
            'SECOND_LAST_NAME'     => 'max:50|required',
            'SEX'                  => 'required',
            'EMPLOYEE_NUMBER'      => 'required|unique:HR_PER_PEOPLE_inf,EMPLOYEE_NUMBER,' . $id,
            'DATE_OF_BIRTH'        => 'required|date',
            'TELEF1'               => 'required',
            'TELEF2'               => 'required',
            'EMAIL_ADDRESS'        => 'required|unique:HR_PER_PEOPLE_inf,EMAIL_ADDRESS,'. $id,
            'SALARY'               => 'numeric|required|between:100,1000|integer',
            'SOLD_MIN'             => 'numeric|required|max:500|integer',
            'DISCCOUNT'            => 'numeric|required|max:100|integer',
            'EFFECTIVE_END_DATE'   => 'required|date|after:EFFECTIVE_START_DATE',
            'EFFECTIVE_START_DATE' => 'required|date',
            'COUNTRY'              => 'max:50|required',
            'ADDRESS'              => 'max:50|required',

                ];
    }
}