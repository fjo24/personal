<?php

namespace sisVentas;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    public function vehiculos()
    {
        return $this->hasMany('sisVentas\Vehiculo');
    }
}
