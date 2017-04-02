@extends('hr.template.main')

@section('title', 'Listado de empleados')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="panel-title">
                        Listado de Empleados
                    </h3>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-danger" href="{{ route('hr.personal.create') }}">
                        NUEVO REGISTRO
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-success" href="/excel">
                        IMPRIMIR REPORTE
                    </a>
                </div>
            </div>
        </div>
        <table class="table table-hover display" id="table">
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
            <tfoot>
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
            </tfoot>
            <tbody>
                @foreach($personal as $personal)
                <tr>
                    <td>
                        {{ $personal->first_LAST_NAME ." ". $personal->SECOND_LAST_NAME .", ". $personal->FIRST_NAME ." ". $personal->SECOND_NAME  }}
                    </td>
                    <td>
                        {{ $personal->EFFECTIVE_END_DATE }}
                    </td>
                    <td>
                        {{ $personal->SALARY }}
                    </td>
                    <td>
                        {{ $personal->SALARY }}
                    </td>
                    <td>
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

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
    $('#table').DataTable({
        "language": {
        "url"     : "{{ asset('plugins/datatable/lang/esp.lang') }}"
            }
    });
} );
</script>
@endsection
