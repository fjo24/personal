<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table    = "HR_PER_PEOPLE_inf";
    protected $fillable = ['FIRST_NAME', 'SECOND_NAME', 'first_LAST_NAME', 'SECOND_LAST_NAME', 'DATE_OF_BIRTH', 'SEX', 'idtipo_doc', 'EMPLOYEE_NUMBER', 'EFFECTIVE_START_DATE', 'EFFECTIVE_END_DATE', 'idposition', 'EMAIL_ADDRESS', 'TELEF1', 'TELEF2', 'SALARY', 'SOLD_MIN', 'DISCCOUNT', 'COUNTRY', 'ADDRESS'];

//CODIGO PARA RELACIONAR CON LAS TABLAS

    public function tipo_doc()
    {
        return $this->belongsTo('App\Tipo_docs');
    }
    public function position()
    {
        return $this->belongsTo('App\Position');
    }
    public function per_ventas()
    {
        return $this->hasMany('App\Per_ventas');
    }


}
