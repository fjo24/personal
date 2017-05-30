<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests\VehiculoFormRequest;
use sisVentas\Vehiculo;
use sisVentas\Marca;
use sisVentas\User;
use sisVentas\createby;
use sisVentas\Modelo;
use sisVentas\Cliente;
use sisVentas\Combustion;
use Laracasts\Flash\Flash;
use sisVentas\Http\Requests;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class VehiculoController extends Controller
{

    public function index()
    {
        $vehiculos = Vehiculo::orderBy('placa', 'DESC')->get();

        return view('asesor.vehiculo.index')->with('vehiculos', $vehiculos);
    }


    public function create()
    {
        $date = Carbon::now()->format('Y-m-d');
        $marcas = Marca::where('condicion', 1)->orderBy('nombre', 'ASC')->lists('nombre', 'idmarca');
        $modelos = Modelo::orderBy('nombre', 'ASC')->where('condicion', 1)->lists('nombre', 'idmodelo');
        $clientes = Cliente::orderBy('full_name', 'ASC')->where('effective_end_date', '>=', $date)->lists('full_name', 'idcliente');
        $combustions = Combustion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('asesor.vehiculo.create')->with('marcas', $marcas)->with('modelos', $modelos)->with('clientes', $clientes)->with('combustions', $combustions);
    }


    public function store(VehiculoFormRequest $request)
    {
        $request = $request->all();

        $request['created_by'] = Auth()->user()->id;
        $request['last_updated_by'] = Auth()->user()->id;

        $dt = Carbon::create($request['año']);
        $dt->format('Y');
        $dt->startOfYear();
        $request['año'] = $dt;

        $vehiculos = new Vehiculo($request);
        $vehiculos->save();
        $vehiculos->combustions()->sync($request['combustions']);

        Flash::success("Se ha registrado de manera exitosa!")->important();

        return redirect()->route('asesor.vehiculo.index');
    }

    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        $combustions = Combustion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('asesor.vehiculo.show', compact('vehiculo'))->with('combustions', $combustions);
    }

    public function edit($id)
    {
        $vehiculos = Vehiculo::find($id);
        $date = Carbon::now()->format('Y-m-d');
        $marcas = Marca::orderBy('nombre', 'ASC')->where('condicion', 1)->lists('nombre', 'idmarca');
        $modelos = Modelo::orderBy('nombre', 'ASC')->where('condicion', 1)->where('idmarca', $vehiculos->idmarca)->lists('nombre', 'idmodelo');
        $clientes = Cliente::orderBy('full_name', 'ASC')->where('effective_end_date', '>=', $date)->lists('full_name', 'idcliente');
        $combustions = Combustion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('asesor.vehiculo.edit')->with('marcas', $marcas)->with('modelos', $modelos)->with('clientes', $clientes)->with('vehiculos', $vehiculos)->with('combustions', $combustions);
    }

    public function update(VehiculoFormRequest $request, Vehiculo $vehiculo)
    {
        $request = $request->all();
        $request['last_updated_by'] = Auth()->user()->id;
        $dt = Carbon::create($request['año']);
        $dt->format('Y');
        $dt->startOfYear();
        $request['año'] = $dt;

        $vehiculo->update($request);
        $vehiculo->manyCombustions()->sync($request['combustions']);
        Flash::success("El vehiculo ha sido editado con exito!")->important();
        return redirect()->route('asesor.vehiculo.index');
    }

    public function export(Request $request, Vehiculo $vehiculos)
    {
        Excel::create('Lista de vehiculos', function ($excel) {

            $excel->sheet('Listado', function ($sheet) {

                $vehiculos = Vehiculo::orderBy('placa', 'ASC')->get();

                $sheet->fromArray($vehiculos);

            });
        })->export('xls');
    }

    public function selectAjax(Request $request)
    {
        $idmarca = request()->get('idmarca');
        if ($request->ajax()) {
            $modelos = Modelo::orderBy('nombre', 'ASC')->where('condicion', 1)->where('idmarca', $idmarca)->lists('nombre', 'idmodelo');
            $data = view('asesor.vehiculo.partials.ajax-select', compact('modelos'))->render();
            return response()->json(['options' => $data]);
        }
    }

    public function search()
    {
        $dat = Carbon::now()->format('Y-m-d');
        $marcas = Marca::where('condicion', 1)->orderBy('nombre', 'ASC')->lists('nombre', 'idmarca');
        $modelos = Modelo::orderBy('nombre', 'ASC')->where('condicion', 1)->lists('nombre', 'idmodelo');
        $clientes = Cliente::orderBy('full_name', 'ASC')->where('effective_end_date', '>=', $dat)->lists('full_name', 'idcliente');
        return view('asesor.vehiculo.search')->with('marcas', $marcas)->with('modelos', $modelos)->with('clientes', $clientes);
    }

   /* public function query(Request $request)
    {    
        $marca=$request->input('idmarca');
        $modelo=$request->input('idmodelo');
        $combustion_gas=$request->input('combustion_gas');
        $combustion_glp=$request->input('combustion_glp');
        $combustion_gnv=$request->input('combustion_gnv');
        $combustion_petroleo=$request->input('combustion_petroleo');
        $año1=$request->input('año1');
        $año2=$request->input('año2');
        $proxima_visita1=$request->input('proxima_visita1');
        $proxima_visita2=$request->input('proxima_visita2');
        $vehiculos = DB::table('vehiculo')
        ->join('marca', 'marca.idmarca', '=', 'vehiculo.idmarca')
        ->join('modelo', 'modelo.idmodelo', '=', 'vehiculo.idmodelo')
        ->when($marca, function ($query) use ($marca) {
        return $query->where('marca.idmarca', $marca);
        })
        ->when($modelo, function ($query) use ($modelo) {
        return $query->where('modelo.idmodelo', $modelo);
        })
        ->when($combustion_gas, function ($query) use ($combustion_gas) {
        return $query->where('vehiculo.combustion_gas', $combustion_gas);
        })
        ->when($combustion_glp, function ($query) use ($combustion_glp) {
        return $query->where('vehiculo.combustion_glp', $combustion_glp);
        })
        ->when($combustion_gnv, function ($query) use ($combustion_gnv) {
        return $query->where('vehiculo.combustion_gnv', $combustion_gnv);
        })
        ->when($combustion_petroleo, function ($query) use ($combustion_petroleo) {
        return $query->where('vehiculo.combustion_petroleo', $combustion_petroleo);
        })
        ->when($año1, function ($query) use ($año1) {
        $año1=\Carbon\Carbon::create($año1)->startOfYear()->format('Y-m-d');
        return $query->where('vehiculo.año', '>=',$año1);
        })
        ->when($año2, function ($query) use ($año2) {
        $año2=\Carbon\Carbon::create($año2)->endOfYear()->format('Y-m-d');
        return $query->where('vehiculo.año', '<=', $año2);
        })
        ->when($proxima_visita1, function ($query) use ($proxima_visita1) {
        $proxima_visita1=\Carbon\Carbon::parse($proxima_visita1)->startOfYear()->format('Y-m-d');
        return $query->where('vehiculo.proxima_visita', '>=',$proxima_visita1);
        })
        ->when($proxima_visita2, function ($query) use ($proxima_visita2) {
        $proxima_visita2=\Carbon\Carbon::parse($proxima_visita2)->endOfYear()->format('Y-m-d');
        return $query->where('vehiculo.proxima_visita', '<=', $proxima_visita2);
        })
        ->select('vehiculo.id','vehiculo.placa', 'marca.nombre as marca', 'modelo.nombre as modelo', 'vehiculo.combustion_gas', 'vehiculo.combustion_glp', 'vehiculo.combustion_gnv', 'vehiculo.combustion_petroleo', 'vehiculo.num_motor', 'vehiculo.km', 'vehiculo.proxima_visita', 'vehiculo.no_atender', 'vehiculo.motivo_no_atencion')
        ->get();
      

       // $a = Vehiculo::orderBy('placa', 'ASC')->get();

      Excel::create('Lista de vehiculos consultados', function ($excel) use($vehiculos) {

            $excel->sheet('Listado', function ($sheet) use ($vehiculos) {


                $sheet->fromArray($vehiculos);

            });
        })->store('xls', storage_path('excel/exports/'.Auth()->user()->id.'/'));


       
            return view('asesor.vehiculo.query')->with('vehiculos', $vehiculos);
    }*/
    public function query(Request $request)
    {
        $vehiculos = Vehiculo::search($request)->orderBy('placa', 'ASC')->get('id');

        Excel::create('Lista de vehiculos consultados', function ($excel) use($vehiculos) {

            $excel->sheet('Listado', function ($sheet) use ($vehiculos) {


                $sheet->fromArray($vehiculos);

            });
        })->store('xls', storage_path('excel/exports/'.Auth()->user()->id.'/'));

        return view('asesor.vehiculo.query')->with('vehiculos', $vehiculos);
    }


    public function exportquery()
    {
        return response()->download(storage_path('excel/exports/'.Auth()->user()->id.'/Lista de vehiculos consultados.xls'));
    }


  /*  public function exportquery(Request $request, Vehiculo $vehiculos)
    {
        dd($vehiculos);
        Excel::create('Lista de vehiculos', function ($excel) {

            $excel->sheet('Listado', function ($sheet) {

                $sheet->fromArray($vehiculos);

            });
        })->export('xls');
    }

*/

   /* public function exportquery(Request $request, Vehiculo $vehiculos)
    {
        Excel::create('Lista de vehiculos', function ($excel) {

            $excel->sheet('Listado', function ($sheet) {

                $vehiculos = Vehiculo::orderBy('placa', 'ASC')->get();

                $sheet->fromArray($vehiculos);

            });
        })->export('xls');
    }*/

}