<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $primaryKey = 'idcliente';
    protected $table    = "cliente";
    protected $fillable = ['idcliente', 'full_name', 'effective_end_date'];

    public function vehiculo()
    {
        return $this->hasMany('App\Vehiculo');
    }
}
