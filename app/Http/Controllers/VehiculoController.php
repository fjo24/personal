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
        $vehiculos = Vehiculo::with('marca', 'modelo', 'cliente')->orderBy('placa', 'DESC')->get();
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
        $vehiculos->manyCombustions()->sync($request['combustions']);

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
        $combustions = Combustion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('asesor.vehiculo.search')->with('marcas', $marcas)->with('modelos', $modelos)->with('clientes', $clientes)->with('combustions', $combustions);
    }

    public function query(Request $request)
    {
        $vehiculos = Vehiculo::search($request)->orderBy('placa', 'ASC')->get('');
        $placa=1;
        //dd($request->combustions);
        Excel::create('Lista de vehiculos consultados', function ($excel) use($vehiculos) {
            $excel->sheet('Listado', function ($sheet) use ($vehiculos) {
                $sheet->fromArray($vehiculos);
            });
        })->store('xls', storage_path('excel/exports/'.Auth()->user()->id.'/'));
        return view('asesor.vehiculo.query')->with('vehiculos', $vehiculos)->with('placa', $placa);
    }
    public function exportquery()
    {
        $vehiculos = Vehiculo::orderBy('placa', 'ASC')->get('');
        $vehiculos = Vehiculo::with('marca', 'modelo', 'cliente')->orderBy('placa', 'DESC')->get();
       Excel::create('New file', function($excel) {
            $excel->sheet('New sheet', function($sheet) {
                $sheet->loadView('asesor.vehiculo.query')->with('vehiculos', $vehiculos);
            });
        })->export('xls');
        return response()->download(storage_path('excel/exports/'.Auth()->user()->id.'/Lista de vehiculos consultados.xls'));
    
    }

}