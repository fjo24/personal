<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class VehiculosRequest extends Request
{

    public function __construct(Route $route)
    {
        $this->route = $route;
    }    
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
$id = Request::segment(3);

        return [
            
            'placa'                => 'required|unique:vehiculo,placa,'. $id,
            'idmarca'              => 'required',
            'idmodelo'             => 'required',
            'año'                  => 'required|date',
            'color'                => 'required',
            'num_motor'            => 'required|unique:vehiculo,num_motor,' . $id,
            'km'                   => 'required|numeric',
            'proxima_visita'       => 'required|date',
            'idcliente'            => 'required',

        ];
    }
}
