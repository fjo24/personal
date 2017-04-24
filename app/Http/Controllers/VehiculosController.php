<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\VehiculosRequest;
use App\Vehiculo;
use App\Marca;
use App\User;
use App\createby;
use App\Modelo;
use App\Cliente;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel; 

class VehiculosController extends Controller
{

    public function index()
    {    
            $vehiculos = Vehiculo::orderBy('placa', 'DESC')->get();
            $vehiculos -> each(function($vehiculos){
            $vehiculos->modelo;
            $vehiculos->marca;
            $vehiculos->cliente;
        });


        return view('asesor.vehiculos.index')->with('vehiculos', $vehiculos);

    }


    public function create()
    {

        $date = Carbon::now()->format('Y-m-d');
       // $year = Carbon::now()->year;
        $marcas = Marca::where('condicion', 1)->orderBy('nombre', 'ASC')->lists('nombre', 'idmarca');
        $modelos = Modelo::orderBy('nombre', 'ASC')->where('condicion', 1)->lists('nombre', 'idmodelo');
        $clientes = Cliente::orderBy('full_name', 'ASC')->where('effective_end_date', '>=', $date)->lists('full_name', 'idcliente');
        return view('asesor.vehiculos.create')->with('marcas', $marcas)->with('modelos', $modelos)->with('clientes', $clientes);
    }
 

    public function store(VehiculosRequest $request)
    {
        $request = $request->all();


        $request['CREATED_BY'] = Auth()->user()->id;
        $request['LAST_UPDATED_BY'] = Auth()->user()->id;
        $dt = Carbon::create($request['año']);
        $dt->format('Y');
        $dt->startOfYear();
        $request['año'] = $dt;
        $vehiculos = new Vehiculo($request);
        $vehiculos->save();

        Flash::success("Se ha registrado de manera exitosa!")->important();
        return redirect()->route('asesor.vehiculos.index');
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

        return view('asesor.vehiculos.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas = Marca::orderBy('nombre', 'ASC')->where('condicion', 1)->lists('nombre', 'idmarca');
        $modelos = Modelo::orderBy('nombre', 'ASC')->where('condicion', 1)->lists('nombre', 'idmodelo');
        $clientes = Cliente::orderBy('full_name', 'ASC')->lists('full_name', 'idcliente');
        $vehiculos = Vehiculo::find($id);
        return view('asesor.vehiculos.edit')->with('marcas', $marcas)->with('modelos', $modelos)->with('clientes', $clientes)->with('vehiculos', $vehiculos);
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
        $dt = Carbon::create($request['año']);
        $dt->format('Y');
        $dt->startOfYear();
        /*
        $createdyear = Carbon::parse($request['proxima_visita'])->format('Y');
        $this->validate($request, [
        'año' => 'max:' . $createdyear,
        ]);
        */

        $request['año'] = $dt;
        $vehiculos->update($request);
        Flash::success("El vehiculo ha sido editado con exito!")->important();

        return redirect()->route('asesor.vehiculos.index');
    }

    public function export(Request $request, Vehiculo $vehiculos)
    {
        Excel::create('Lista de vehiculos', function ($excel) {

            $excel->sheet('Listado', function ($sheet) {

                //$personal = Personal::all();
               // $request['año'] = Carbon::now()->format('Y');
                $date = Carbon::now()->format('Y-m-d');
                $vehiculos = Vehiculo::orderBy('placa', 'ASC')->get();

                $sheet->fromArray($vehiculos);

            });
        })->export('xls');
    }

    public function selectAjax(Request $request)
    {
        $idmarca = request()->get('idmarca');
        if($request->ajax()){
            $modelos = Modelo::orderBy('nombre', 'ASC')->where('condicion', 1)->where('idmarca', $idmarca)->lists('nombre', 'idmodelo');
            $data = view('asesor.vehiculos.partials.ajax-select',compact('modelos'))->render();
            return response()->json(['options'=>$data]);
        }
    }

    public function destroy($id)
    {
        //
    }


}
