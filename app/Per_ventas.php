<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Per_ventas extends Model
{
    protected $table = "Per_ventas";
    protected $fillable = ['personal_id', 'date', 'amount', 'invoice_id', 'status'];


    public function personal()
    {
        return $this->belongsTo('App\Personal');
    }
}
