<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_docs extends Model
{
    protected $table    = "tipo_docs";
    protected $fillable = ['idtipo_doc', 'codigo', 'nombre'];

    public function articles()
    {
        return $this->hasMany('App\Personal');
    }

}
