<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\VehiculosRequest;
use App\Vehiculo;
use App\Marca;
use App\Modelo;
use App\Cliente;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel; 

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        $vehiculos = Vehiculo::orderBy('placa', 'ASC')->get();
        return view('hr.vehiculos.index')->with('vehiculos', $vehiculos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::orderBy('nombre', 'ASC')->lists('nombre', 'idmarca');
        $modelos = Modelo::orderBy('nombre', 'ASC')->lists('nombre', 'idmodelo');
        $clientes = Cliente::orderBy('full_name', 'ASC')->lists('full_name', 'idcliente');
        return view('hr.vehiculos.create')->with('marcas', $marcas)->with('modelos', $modelos)->with('clientes', $clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculosRequest $request)
    {
        $request = $request->all();

        $request['CREATED_BY'] = Auth()->user()->id;
        $request['UPDATE_BY'] = Auth()->user()->id;


        $vehiculos = new Vehiculo($request);
        $vehiculos->save();

        Flash::success("Se ha registrado de manera exitosa!")->important();
        return redirect()->route('hr.vehiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('hr.vehiculos.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas = Marca::orderBy('nombre', 'ASC')->lists('nombre', 'idmarca');
        $modelos = Modelo::orderBy('nombre', 'ASC')->lists('nombre', 'idmodelo');
        $clientes = Cliente::orderBy('full_name', 'ASC')->lists('full_name', 'idcliente');
        $vehiculos = Vehiculo::find($id);
        return view('hr.vehiculos.edit', compact('marcas', 'modelos', 'clientes', 'vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculosRequest $request, Vehiculo $vehiculos)
    {
        $request = $request->all();
        $request['LAST_UPDATED_BY'] = Auth()->user()->id;
        $vehiculos->update($request);
        Flash::success("El vehiculo ha sido editado con exito!")->important();

        return redirect()->route('hr.vehiculos.index');
    }

    public function export(Request $request, Vehiculo $vehiculos)
    {
        Excel::create('Lista de vehiculos', function ($excel) {

            $excel->sheet('Listado', function ($sheet) {

                //$personal = Personal::all();
                $date = Carbon::now()->format('Y-m-d');
                $vehiculos = Vehiculo::orderBy('placa', 'ASC')->get();

                $sheet->fromArray($vehiculos);

            });
        })->export('xls');
    }

    public function destroy($id)
    {
        //
    }
}