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

        public function scopeSearch($query, $date){

        $marca= $date->idmarca;
        $placa= $date->placa;
        $modelo= $date->idmodelo;
        $año1=$date->año1;
        $año2=$date->año2;
        $combustion_gas= $date->combustion_gas;
        $combustion_glp= $date->combustion_glp;
        $combustion_gnv= $date->combustion_gnv;
        $combustion_petroleo= $date->combustion_petroleo;
        $proxima_visita1=$date->proxima_visita1;
        $proxima_visita2=$date->proxima_visita2;
        $no_atender= $date->no_atender;


        if($combustion_gas=='1'){
            $gas=$combustion_gas;
        }else{
            $gas=null;
        }

        if($combustion_glp=='1'){
            $glp=$combustion_glp;
        }else{
            $glp=null;
        }

        if($combustion_gnv=='1'){
            $gnv=$combustion_gnv;
        }else{
            $gnv=null;
        }

        if($combustion_petroleo=='1'){
            $petroleo=$combustion_petroleo;
        }else{
            $petroleo=null;
        }

        if($no_atender=='1'){
            $atendido=$no_atender;
        }else{
            $atendido=null;
        }

        if ($año1=="") {
            $año1=null;
        } else {
            $año1=\Carbon\Carbon::create($date['año1'])->startOfYear()->format('Y-m-d');
        }
        if ($año2=="") {
            $año2=null;
        } else {
            $año2=\Carbon\Carbon::create($date['año2'])->endOfYear()->format('Y-m-d');
        }

        if ($proxima_visita1=='') {
            $proxima_visita1=null;
        } else {
            $proxima_visita1=\Carbon\Carbon::parse($date['proxima_visita1'])->format('Y-m-d');
        }

        if ($proxima_visita2=='') {
            $proxima_visita2=null;
        } else {
            $proxima_visita2=\Carbon\Carbon::parse($date['proxima_visita2'])->format('Y-m-d');
        }

        if (($año1 != "")&&($año2 != ""))
        {
            $query->whereBetween('año', [$año1, $año2]);
        }elseif($año1 != ""){
            $query->where('año', '>=', $año1);
        }elseif($año2 != ""){
            $query->where('año', '<=', $año2);
        }

        if (($proxima_visita1 != "")&&($proxima_visita2 != ""))
        {
            $query->whereBetween('proxima_visita', [$proxima_visita1, $proxima_visita2]);
        }elseif($proxima_visita1 != ""){
            $query->where('proxima_visita', '>=', $proxima_visita1);
        }elseif($proxima_visita2 != ""){
            $query->where('proxima_visita', '<=', $proxima_visita2);
        }

        return $query
            ->join('marca', 'marca.idmarca', '=', 'vehiculo.idmarca')
            ->join('modelo', 'modelo.idmodelo', '=', 'vehiculo.idmodelo')
            ->select('vehiculo.id', 'vehiculo.placa','vehiculo.idmarca', 'marca.nombre as marca', 'vehiculo.idmodelo', 'modelo.nombre as modelo', 'vehiculo.combustion_gas', 'vehiculo.combustion_glp', 'vehiculo.combustion_gnv', 'vehiculo.combustion_petroleo', 'vehiculo.num_motor', 'vehiculo.km', 'vehiculo.proxima_visita', 'vehiculo.no_atender', 'vehiculo.motivo_no_atencion')
            ->where('vehiculo.idmarca', 'LIKE', "%$marca%")
            ->where('vehiculo.idmodelo', 'LIKE', "%$modelo%")
            ->where('vehiculo.combustion_gas', 'LIKE', "%$gas%")
            ->where('vehiculo.combustion_glp', 'LIKE', "%$glp%")
            ->where('vehiculo.combustion_gnv', 'LIKE', "%$gnv%")
            ->where('vehiculo.combustion_petroleo', 'LIKE', "%$petroleo%")->where('vehiculo.no_atender', 'LIKE', "%$atendido%");

    }
}