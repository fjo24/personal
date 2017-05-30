<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Combustion extends Model
{
    protected $table = "combustion";
    protected $fillable = ['nombre'];

    public function vehiculos()
    {
    	return $this-> belongsToMany('sisVentas\Vehiculo');
    }
}
