<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Personal;
use App\Position;
use App\Tipo_docs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class PersonalController extends Controller
{

    public function index()
    {
        $personal = Personal::orderBy('id', 'ASC')->paginate(20);
        return view('hr.personal.index')->with('personal', $personal);
    }

    public function create()
    {
        $tipo_docs = Tipo_docs::orderBy('nombre', 'ASC')->lists('nombre', 'idtipo_doc');
<<<<<<< HEAD
        $position  = Position::orderBy('name', 'ASC')->lists('name', 'idposition');
        return view('hr.personal.create')->with('tipo_docs', $tipo_docs)->with('position', $position);
=======
        $position = Position::orderBy('name', 'ASC')->lists('name', 'idposition');
        return view('hr.personal.create')->with('Tipo_docs', $tipo_docs)->with('Position', $position);
>>>>>>> ac78a65d939e5108897f60dfb0628a096982fee6
    }

    public function store(PersonalRequest $request)
    {
        $request = $request->all();

        $date                     = new \Carbon\Carbon($request['DATE_OF_BIRTH']);
        $request['DATE_OF_BIRTH'] = $date->format('Y-m-d');

<<<<<<< HEAD
        $date                            = new \Carbon\Carbon($request['EFFECTIVE_START_DATE']);
=======
        $date = new \Carbon\Carbon($request['EFFECTIVE_START_DATE']);
>>>>>>> ac78a65d939e5108897f60dfb0628a096982fee6
        $request['EFFECTIVE_START_DATE'] = $date->format('Y-m-d');

        $date                          = new \Carbon\Carbon($request['EFFECTIVE_END_DATE']);
        $request['EFFECTIVE_END_DATE'] = $date->format('Y-m-d');

        $personal = new Personal($request);
        $personal->save();

        Flash::success("Se ha registrado de manera exitosa!")->important();
        return redirect()->route('hr.personal.index');
    }

    public function show($id)
    {
        $persona = Personal::find($id);
        return view('hr.personal.show')->with('persona', $persona);

    }

    public function edit($id)
    {
        $tipo_docs = Tipo_docs::orderBy('nombre', 'ASC')->lists('nombre', 'idtipo_doc');
<<<<<<< HEAD
        $position  = Position::orderBy('name', 'ASC')->lists('name', 'idposition');
        $personal  = Personal::find($id);
=======
        $position = Position::orderBy('name', 'ASC')->lists('name', 'idposition');
        $personal = Personal::find($id);
>>>>>>> ac78a65d939e5108897f60dfb0628a096982fee6
        return view('hr.personal.edit', compact('personal', 'tipo_docs', 'position'));
    }

    public function update(Request $request, Personal $personal)
    {
        $personal->update($request->all());
        Flash::success("El empleado ha sido editado con exito!")->important();
<<<<<<< HEAD

=======
        
>>>>>>> ac78a65d939e5108897f60dfb0628a096982fee6
        return redirect()->route('hr.personal.index');
    }

    public function destroy($id)
    {
        /*
<<<<<<< HEAD
    $personal = Personal::find($id);
    $personal->delete();
    return redirect()->route('admin.users.index');
     */
=======
        $personal = Personal::find($id);
         $personal->delete();
         return redirect()->route('admin.users.index');
         */
>>>>>>> ac78a65d939e5108897f60dfb0628a096982fee6
    }
}
