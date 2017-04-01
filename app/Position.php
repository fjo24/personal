<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table    = "position";
    protected $fillable = ['idposition', 'name', 'condicion'];

    public function personal()
    {
        return $this->hasMany('App\Personal');
    }
}
