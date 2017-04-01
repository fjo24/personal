<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Personal;
use App\Position;
use Laracasts\Flash\Flash;
//use App\Per_ventas;
use App\Tipo_docs;
use Illuminate\Http\Request;

class PersonalController extends Controller
{

    public function index()
    {

        $personal = Personal::orderBy('id', 'ASC')->paginate(120);
        return view('hr.personal.index')->with('personal', $personal);
    }

    public function create()
    {

        $Tipo_docs = Tipo_docs::orderBy('nombre', 'ASC')->lists('nombre', 'idtipo_doc');

        $Position = Position::orderBy('name', 'ASC')->lists('name', 'idposition');

        return view('hr.personal.create')->with('Tipo_docs', $Tipo_docs)->with('Position', $Position);
    }

    public function store(PersonalRequest $request)
    {

        $personal = new Personal($request->all());
        $personal->save();
          Flash::success("Se ha registrado de manera exitosa!")->important();
        return redirect()->route('hr.personal.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

      /*  $personal = Personal::orderBy('name', 'ASC')->lists('name', 'id');
        $personal->position;
        $Tipo_docs = Tipo_docs::orderBy('nombre', 'ASC')->lists('nombre', 'idtipo_doc');

        $Position = Position::orderBy('name', 'ASC')->lists('name', 'idposition');

        return view('hr.personal.edit')->with('Tipo_docs', $Tipo_docs)->with('Position', $Position)->with('personal', $personal);
        //->with('Tipo_docs', $Tipo_docs)->with('Position', $Position);*/
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //     $personal = Personal::find($PERSON_ID);
        //   $personal->delete();

        // return redirect()->route('admin.users.index');
    }
}

