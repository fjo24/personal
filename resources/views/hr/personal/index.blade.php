@extends('hr.template.main')

@section('title', 'Listado de empleados')

@section('content')
<link href="{{ asset ('plugins/datatable/media/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="panel-title">
                            Listado de Empleados
                        </h3>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-danger" href="{{ route('hr.personal.create') }}">
                            Nuevo
                        </a>
                        <a class="btn btn-info" href="{{ route('hr.personal.create') }}">
                            Registro
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                        <th>
                            NOMBRE COMPLETO
                        </th>
                        <th>
                            FECHA CESE
                        </th>
                        <th>
                            SALARIO
                        </th>
                        <th>
                            TOTAL VENTAS
                        </th>
                        <th>
                            OPCIONES
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personal as $personal)
                    <tr>
                        <td>
                            {{ $personal->FIRST_NAME }}
                        </td>
                        <td>
                            {{ $personal->EFFECTIVE_END_DATE }}
                        </td>
                        <td>
                            {{ $personal->SALARY }}
                        </td>
                        <td>
                        </td>
                        <td>
                            <a class="btn btn-danger glyphicon glyphicon-remove" href="{{ route('hr.personal.create') }}" onclick="return confirm('¿Realmente deseas borrar el usuario?')">
                            </a>
                            <a class="btn btn-info" href="{{ route('hr.personal.edit', $personal->id) }}" role="button">
                                Editar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    <script>
$('table').dataTable( {
  paginate: false,
  scrollY: 300
} );

    </script>