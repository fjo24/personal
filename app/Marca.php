<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $primaryKey = 'idmarca';
    protected $table    = "marca";
    protected $fillable = ['idmarca', 'nombre', 'condicion'];

    public function modelo()
    {
        return $this->hasMany('App\Modelo');
    }
    
    public function vehiculo()
    {
        return $this->hasMany('App\Vehiculo');
    }

}
