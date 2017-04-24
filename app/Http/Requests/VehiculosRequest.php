<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;
use Carbon\Carbon;

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
        $td = Carbon::create()->format('Y');


        return [
            
            'placa'                => 'required|unique:vehiculo,placa,'. $id,
            'idmarca'              => 'required',
            'idmodelo'             => 'required',
            'año'                  => 'required|integer|max:'.$td,
            'color'                => 'required',
            'num_motor'            => 'required|unique:vehiculo,num_motor,' . $id,
            'km'                   => 'required|alpha_num',
            'proxima_visita'       => 'required|date',
            'idcliente'            => 'required',

        ];
    }
}
