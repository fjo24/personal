<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Vehiculo extends Model
{

    protected $table    = "vehiculo";
    protected $fillable = ['placa', 'idmarca', 'idmodelo', 'año', 'color', 'combustion_gas', 'combustion_glp', 'combustion_gnv', 'combustion_petroleo', 'num_motor', 'km', 'proxima_visita', 'no_atender', 'idcliente', 'motivo_no_atencion', 'LAST_UPDATED_BY', 'CREATED_BY'];	

    public function cliente()
    {
    return $this->belongsTo('App\Cliente', 'idcliente', 'idcliente');
    }

    public function modelo()
    {
    return $this->belongsTo('App\Modelo', 'idmodelo', 'idmodelo');
    }

    public function marca()
    {
    return $this->belongsTo('App\Marca', 'idmarca', 'idmarca');
    }
    public function user()
    {
    return $this->belongsTo('App\User', 'LAST_UPDATED_BY');
    }
    public function createby()
    {
    return $this->belongsTo('App\User', 'CREATED_BY');
    }

    public function getproximavisitaAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
    }

    public function setproximavisitaAttribute($date)
    {
        $this->attributes['proxima_visita'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }

    public function getañoAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('Y');
    }

    public function setañoAttribute($date)
    {
        $this->attributes['año'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }

    public function getupdatedatAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
    }

    public function setupdatedatAttribute($date)
    {
        $this->attributes['updated_at'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }

    public function getcreatedatAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
    }

    public function setcreatedatAttribute($date)
    {
        $this->attributes['created_at'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }

}