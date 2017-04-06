<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Personal;
use App\Position;
use Carbon\Carbon;
use App\Tipo_docs;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;

class PersonalController extends Controller
{

    public function index($flag = null)
    {
        $date = Carbon::now()->format('Y-m-d');
        if ($flag) {
            $personal = Personal::orderBy('first_LAST_NAME', 'ASC')->get();
        } else {
            $personal = Personal::orderBy('first_LAST_NAME', 'ASC')->where('EFFECTIVE_END_DATE', '>=', $date)->get();
        }
        return view('hr.personal.index')->with('personal', $personal)->with('flag',$flag);
    }

    public function create()
    {
        $tipo_docs = Tipo_docs::orderBy('nombre', 'ASC')->lists('nombre', 'idtipo_doc');
        $position = Position::orderBy('name', 'ASC')->where('condicion', 1)->lists('name', 'idposition');
        return view('hr.personal.create')->with('tipo_docs', $tipo_docs)->with('position', $position);
    }

    public function store(PersonalRequest $request)
    {
        $request = $request->all();

        $date = new \Carbon\Carbon($request['DATE_OF_BIRTH']);
        $request['DATE_OF_BIRTH'] = $date->format('Y-m-d');

        $date = new \Carbon\Carbon($request['EFFECTIVE_START_DATE']);
        $request['EFFECTIVE_START_DATE'] = $date->format('Y-m-d');

        $date = new \Carbon\Carbon($request['EFFECTIVE_END_DATE']);
        $request['EFFECTIVE_END_DATE'] = $date->format('Y-m-d');

        $request['CREATED_BY'] = Auth()->user()->id;
        $request['FULL_NAME'] = $request['first_LAST_NAME'] . " " . $request['SECOND_LAST_NAME'] . " " . $request['FIRST_NAME'] . " " . $request['SECOND_NAME'];

        $request['CREATED_BY'] = Auth()->user()->id;


        $personal = new Personal($request);
        $personal->save();

        Flash::success("Se ha registrado de manera exitosa!")->important();
        return redirect()->route('hr.personal.index');
    }

    public function show($id)
    {
        $persona = Personal::findOrFail($id);
        return view('hr.personal.show', compact('persona'));
    }

    public function edit($id)
    {
        $tipo_docs = Tipo_docs::orderBy('nombre', 'ASC')->lists('nombre', 'idtipo_doc');
        $position = Position::orderBy('name', 'ASC')->where('condicion', 1)->lists('name', 'idposition');
        $personal = Personal::find($id);
        return view('hr.personal.edit', compact('personal', 'tipo_docs', 'position'));
    }

    public function update(Request $request, Personal $personal)
    {

        $request = $request->all();
        $request['LAST_UPDATE_DATE'] = Carbon::now();
        $request['LAST_UPDATED_BY'] = Auth()->user()->id;
        $request['FULL_NAME'] = $request['first_LAST_NAME'] . " " . $request['SECOND_LAST_NAME'] . " " . $request['FIRST_NAME'] . " " . $request['SECOND_NAME'];
        $personal->update($request);
        Flash::success("El empleado ha sido editado con exito!")->important();

        return redirect()->route('hr.personal.index');
    }

    public function export(Request $request, Personal $personal)
    {
        Excel::create('Lista de empleados', function ($excel) {

            $excel->sheet('Listado', function ($sheet) {

                //$personal = Personal::all();
                $date = Carbon::now()->format('Y-m-d');
                $personal = Personal::orderBy('first_LAST_NAME', 'ASC')->where('EFFECTIVE_END_DATE', '>=', $date)->get();

                $sheet->fromArray($personal);

            });
        })->export('xls');
    }

    public function destroy($id)
    {

    }
}