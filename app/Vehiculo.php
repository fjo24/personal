<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class Vehiculo extends Model
{

    protected $table = "vehiculo";
    protected $fillable = ['id', 'placa', 'idmarca', 'idmodelo', 'año', 'color', 'combustion_gas', 'combustion_glp', 'combustion_gnv', 'combustion_petroleo', 'num_motor', 'km', 'proxima_visita', 'no_atender', 'idcliente', 'motivo_no_atencion', 'last_updated_by', 'created_by'];

    public function cliente()
    {
        return $this->belongsTo('sisVentas\Cliente', 'idcliente', 'idcliente');
    }

    public function modelo()
    {
        return $this->belongsTo('sisVentas\Modelo', 'idmodelo', 'idmodelo');
    }

    public function marca()
    {
        return $this->belongsTo('sisVentas\Marca', 'idmarca', 'idmarca');
    }

    public function user()
    {
        return $this->belongsTo('sisVentas\User', 'last_updated_by');
    }

    public function createby()
    {
        return $this->belongsTo('sisVentas\User', 'created_by');
    }

    public function manyCombustions()
    {
        return $this->belongsToMany('sisVentas\Combustion');
    }

    public function getCombustionsAttribute()
    {
        return $this->manyCombustions()->lists('combustion_id')->toArray();
    }

    public function getProximaVisitaAttribute($date)
    {
        if($date != '0000-00-00'){
            return $date = \Carbon\Carbon::parse($date)->format('d-m-Y');
        }
        return '';
    }

    public function getañoAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('Y');
    }

    public function getupdatedatAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y - h:i:s A');
    }

    public function getcreatedatAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-Y - h:i:s A');
    }

    public function setProximaVisitaAttribute($date)
    {
        if($date == ''){
            $this->attributes['proxima_visita'] = \Carbon\Carbon::parse('0000-00-00')->format('Y-m-d');
        }else{
            $this->attributes['proxima_visita'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
        }
    }

    public function setañoAttribute($date)
    {
        $this->attributes['año'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }
        public function scopeSearch($query, $date)
    {
        $marca=array_get($date, 'idmarca', false);
        $modelo=array_get($date, 'idmodelo', false);
        $año1=array_get($date, 'año1', false);
        $año2=array_get($date, 'año2', false);
        $proxima_visita1=array_get($date, 'proxima_visita1', false);
        $proxima_visita2=array_get($date, 'proxima_visita2', false);
        $no_atender=array_get($date, 'no_atender', false);
        $combustions=array_get($date, 'combustions', false);
        //$collections=Collection::make($combustions);
       //dd($combustions);

       // $collections=Collection::make($combustions);
        //dd($collections);
        return $query
        ->join('marca', 'marca.idmarca', '=', 'vehiculo.idmarca')
        ->join('modelo', 'modelo.idmodelo', '=', 'vehiculo.idmodelo')
        ->join('combustion_vehiculo', 'combustion_vehiculo.vehiculo_id', '=', 'vehiculo.id')
        //->join('combustion', 'combustion.id', '=', 'combustion_vehiculo.combustion_id')
        ->when($combustions, function ($query) use ($combustions) {
        return $query->WhereIn('combustion_vehiculo.combustion_id', $combustions);
        })
        ->when($marca, function ($query) use ($marca) {
        return $query->where('marca.idmarca', $marca);
        })
        ->when($modelo, function ($query) use ($modelo) {
        return $query->where('modelo.idmodelo', $modelo);
        })
        ->when($año1, function ($query) use ($año1) {
        $año1=\Carbon\Carbon::create($año1)->startOfYear()->format('Y-m-d');
        return $query->where('vehiculo.año', '>=', $año1);
        })
        ->when($año2, function ($query) use ($año2) {
        $año2=\Carbon\Carbon::create($año2)->endOfYear()->format('Y-m-d');
        return $query->where('vehiculo.año', '<=', $año2);
        })
        ->when($proxima_visita1, function ($query) use ($proxima_visita1) {
        $proxima_visita1=\Carbon\Carbon::parse($proxima_visita1)->format('Y-m-d');
        return $query->where('vehiculo.proxima_visita', '>=',$proxima_visita1);
        })
        ->when($proxima_visita2, function ($query) use ($proxima_visita2) {
        $proxima_visita2=\Carbon\Carbon::parse($proxima_visita2)->format('Y-m-d');
        return $query->where('vehiculo.proxima_visita', '<=', $proxima_visita2);
        })
        ->when($no_atender, function ($query) use ($no_atender) {
        return $query->where('vehiculo.no_atender', $no_atender);
        })
        ->select('vehiculo.id', 'vehiculo.placa', 'modelo.nombre as modelo', 'marca.nombre as marca', 'vehiculo.num_motor', 'vehiculo.km', 'vehiculo.proxima_visita', 'vehiculo.no_atender', 'vehiculo.motivo_no_atencion');
    }
}