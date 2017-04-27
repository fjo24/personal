<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Vehiculo extends Model
{

    protected $table = "vehiculo";
    protected $fillable = ['placa', 'idmarca', 'idmodelo', 'año', 'color', 'combustion_gas', 'combustion_glp', 'combustion_gnv', 'combustion_petroleo', 'num_motor', 'km', 'proxima_visita', 'no_atender', 'idcliente', 'motivo_no_atencion', 'last_updated_by', 'created_by'];

    public function cliente()
    {
        return $this->belongsTo('sisVentas\Cliente', 'idcliente', 'idcliente');
    }

    public function modelo()
    {
        return $this->belongsTo('sisVentas\Modelo', 'idmodelo', 'idmodelo');
    }

    public function marca()
    {
        return $this->belongsTo('sisVentas\Marca', 'idmarca', 'idmarca');
    }

    public function user()
    {
        return $this->belongsTo('sisVentas\User', 'last_updated_by');
    }

    public function createby()
    {
        return $this->belongsTo('sisVentas\User', 'created_by');
    }

    public function getproximavisitaAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
    }

    public function getañoAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('Y');
    }

    public function getupdatedatAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y - h:i:s A');
    }

    public function getcreatedatAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y - h:i:s A');
    }

    public function setproximavisitaAttribute($date)
    {
        $this->attributes['proxima_visita'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }

    public function setañoAttribute($date)
    {
        $this->attributes['año'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }



}