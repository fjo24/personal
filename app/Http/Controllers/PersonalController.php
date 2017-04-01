<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Tipo_docs;
use App\Position;
//use App\Per_ventas;
use App\Personal;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class PersonalController extends Controller
{

    public function index()
    {


        $personal = Personal::orderBy('PERSON_ID', 'ASC')->paginate(120);
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

     //   $personal = new Personal($request->all());
      //  $personal->save();
     //   Flash::success("Se ha registrado de manera exitosa!")->important();
        //return redirect()->route('hr.personal.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($PERSON_ID)
    {
                $personal = Personal::find($PERSON_ID);

    $Tipo_docs = Tipo_docs::orderBy('nombre', 'ASC')->lists('nombre', 'idtipo_doc');

$Position = Position::orderBy('name', 'ASC')->lists('name', 'idposition');

        return view('hr.personal.edit')->with('Tipo_docs', $Tipo_docs)->with('Position', $Position)->with('personal', $personal);
        //->with('Tipo_docs', $Tipo_docs)->with('Position', $Position);
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
