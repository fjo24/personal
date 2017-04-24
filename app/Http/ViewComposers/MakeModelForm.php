<?php

namespace App\Http\ViewComposers;

use App\Marca;
use App\Modelo;


use Illuminate\Contracts\View\View;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
/**
* 
*/
class MakeModelForm
{
	
	public function compose(view $view)
	{
		$makeForm = Request::only('idmarca', 'idmodelo');
		//$makeForm=$request->only('idmarca', 'idmodelo');
		//$makeForm = Marcas::all();

		$marcas  = Marca::orderBy('nombre', 'ASC')->lists('nombre', 'idmarca')->toArray();

		$modelos = array();

		if($makeForm['idmarca'] != null){

			$modelos = Modelo::orderBy('nombre', 'ASC')->where('idmarca', $makeForm['idmarca'])->lists('nombre', 'idmodelo')->toArray();

		}else{
			$modelos = Modelo::orderBy('nombre', 'ASC')->where('idmodelo', 4)->lists('nombre', 'idmodelo')->toArray();
		}      
		$view->with(compact('makeForm', 'marcas', 'modelos'));
		//$view->with('makeform', $makeform)->with('marcas', $marcas)->with('modelos', $modelos);*/
	}

}