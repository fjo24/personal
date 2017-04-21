<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    protected $table = "vehiculo";
    protected $fillable = ['placa', 'idmarca', 'idmodelo', 'año', 'color', 'combustion_gas', 'combustion_glp', 'combustion_gnv', 'combustion_petroleo', 'num_motor', 'km', 'proxima_visita', 'no_atender', 'idcliente', 'motivo_no_atencion', 'LAST_UPDATED_BY', 'CREATED_BY'];	

    public function cliente()
    {
    return $this->belongsTo('App\Cliente');
    }

    public function modelo()
    {
    return $this->belongsTo('App\Modelo');
    }

    public function marca()
    {
    return $this->belongsTo('App\Marca');
    }

}
