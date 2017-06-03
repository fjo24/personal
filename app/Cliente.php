<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Cliente extends Model
{
	protected $primaryKey = 'idcliente';
    protected $table    = "cliente";
    protected $fillable = ['idcliente', 'full_name', 'effective_end_date'];

    public function vehiculos()
    {
        return $this->hasMany('sisVentas\Vehiculo');
    }
}
