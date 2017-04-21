@extends('layouts.admin')

@section('title', 'Crear usuario')

@section('contenido')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                Detalles del empleado
            </h3>
            <div class="box-tools">

                <div class="text-center">
                    <a class="btn btn-success btn-sm" href="{{ route('hr.vehiculos.index') }}">
                        Volver
                    </a>
                </div>

            </div>
        </div>
        <div class="box-body">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        @include('hr.partials.errors')
                        <h3 class="box-title">
                            DATOS DEL REGISTRO
                        </h3>
                    </div>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Placa:</td>
                            <td>{{ $vehiculo->placa }}</td>
                        </tr>
                        <tr>
                            <td>idmarca:</td>
                            <td>{{ $vehiculo->idmarca }}</td>
                        </tr>
                            <td>idmodelo:</td>
                            <td>{{ $vehiculo->idmodelo }}</td>
                        </tr>
                        <tr>
                            <td>Año:</td>
                            <td>{{ $vehiculo->año }}</td>
                        </tr>
                        <tr>
                            <td>Color:</td>
                            <td>{{ $vehiculo->color }}</td>
                        </tr>
                        <td>Combustión GAS:</td>
                        <td>{{ $vehiculo->combustion_gas }}</td>
                        </tr>
                        <tr>
                            <td>Combustión GLP:</td>
                            <td>{{ $vehiculo->combustion_glp }}</td>
                        </tr>
                        <tr>
                            <td>combustión GNV:</td>
                            <td>{{ $vehiculo->combustion_gnv }}</td>
                        </tr>
                        <tr>
                            <td>Combustión Petroleo:</td>
                            <td>{{ $vehiculo->combustion_petroleo }}</td>
                        </tr>
                        <tr>
                            <td>Numero de Motor:</td>
                            <td>{{ $vehiculo->num_motor }}</td>
                        </tr>
                        <tr>
                            <td>Kilometraje:</td>
                            <td>{{ $vehiculo->km }}</td>
                        </tr>
                        <tr>
                            <td>Proxima Visita:</td>
                            <td>{{ $vehiculo->proxima_visita }}</td>
                        </tr>
                        <tr>
                            <td>idcliente:</td>
                            <td>{{ $vehiculo->idcliente }}</td>
                        </tr>
                        <tr>
                            <td>Creado por:</td>
                            <td>{{ $vehiculo->idcliente }}</td>
                        </tr>
                        <tr>
                            <td>Actualizado por:</td>
                            <td>{{ $vehiculo->idcliente }}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="for text-center">
        <a class="btn btn-success btn-sm" href="{{ route('hr.vehiculos.index') }}">
            Regresar
        </a>
    </div>
@endsection