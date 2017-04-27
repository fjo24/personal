<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Marca extends Model
{
    protected $primaryKey = 'idmarca';
    protected $table    = "marca";
    protected $fillable = ['idmarca', 'nombre', 'condicion'];

    public function modelos()
    {
        return $this->hasMany('sisVentas\Modelo');
    }
    
    public function vehiculos()
    {
        return $this->hasMany('sisVentas\Vehiculo');
    }

}
