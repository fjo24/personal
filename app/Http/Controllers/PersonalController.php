<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use App\Http\Requests\PersonalRequest;

class PersonalController extends Controller
{

    public function index()
    {

        $personal = Personal::orderBy('PERSON_ID', 'ASC')->paginate(120);
        return view('hr.personal.index')->with('personal', $personal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hr.personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalRequest $request)
    {

        $personal = new Personal($request->all());
        $personal->save();

        return redirect()->route('hr.personal.index');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                return view('hr.personal.edit');
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
        //
    }
}
