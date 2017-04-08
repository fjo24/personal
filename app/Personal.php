<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = "HR_PER_PEOPLE_inf";
    protected $fillable = ['FIRST_NAME', 'SECOND_NAME', 'first_LAST_NAME', 'SECOND_LAST_NAME', 'FULL_NAME', 'DATE_OF_BIRTH', 'SEX', 'idtipo_doc', 'EMPLOYEE_NUMBER', 'EFFECTIVE_START_DATE', 'EFFECTIVE_END_DATE', 'idposition', 'EMAIL_ADDRESS', 'TELEF1', 'TELEF2', 'SALARY', 'SOLD_MIN', 'DISCCOUNT', 'COUNTRY', 'ADDRESS', 'CREATED_BY', 'LAST_UPDATED_BY', 'LAST_UPDATE_DATE'];
    protected $dateFormat = 'd-m-Y';

//CODIGO PARA RELACIONAR CON LAS TABLAS

    public function tipo_doc()
    {
        return $this->hasOne('App\Tipo_docs');
    }

    public function position()
    {
        return $this->hasOne('App\Position');
    }

    public function ventas()
    {
        return $this->hasMany('App\Per_ventas');
    }

    public function getAmountAttribute()
    {
        $amount = Per_ventas::where('personal_id', $this->id)->where('status', 'v')->sum('amount');
        if ($amount != null) {
            return $amount;
        }
        return 0;
    }

    public function getDATEOFBIRTHAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
    }

    public function getEFFECTIVESTARTDATEAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
    }

    public function getEFFECTIVEENDDATEAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
    }

    public function setDATEOFBIRTHAttribute($date)
    {
        $this->attributes['DATE_OF_BIRTH'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }

    public function setEFFECTIVESTARTDATEAttribute($date)
    {
        $this->attributes['EFFECTIVE_START_DATE'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }

    public function setEFFECTIVEENDDATEAttribute($date)
    {
        $this->attributes['EFFECTIVE_END_DATE'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }
}