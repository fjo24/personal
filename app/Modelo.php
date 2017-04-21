<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $primaryKey = 'idmodelo';
	protected $table    = "modelo";
    protected $fillable = ['idmodelo', 'idmarca', 'nombre', 'condicion'];

    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }

    public function vehiculo()
    {
        return $this->hasMany('App\Vehiculo');
    }
    
}
