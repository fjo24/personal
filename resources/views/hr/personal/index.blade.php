@extends('layouts.layout')

@section('title', 'Listado de empleados')

@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Listado de empleados</h3>

            <div class="box-tools pull-right">
                <a class="btn btn-danger btn-sm" href="{{ route('hr.personal.create') }}">NUEVO REGISTRO</a>
                <a class="btn btn-success btn-sm" href="/excel">IMPRIMIR REPORTE</a>

                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover display table-responsive table-condensed" id="table">
                                <thead>
                                <tr>
                                    <th>NOMBRE COMPLETO</th>
                                    <th> FECHA CESE</th>
                                    <th>SALARIO</th>
                                    <th> TOTAL VENTAS</th>
                                    <th>OPCIONES</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($personal as $personal)
                                    <tr>
                                        <td>
                                            {{ $personal->first_LAST_NAME ." ". $personal->SECOND_LAST_NAME .", ". $personal->FIRST_NAME ." ". $personal->SECOND_NAME  }}
                                        </td>
                                        <td>{{ $personal->EFFECTIVE_END_DATE }} </td>
                                        <td>{{ $personal->SALARY }}</td>
                                        <td>{{ $personal->SALARY }}</td>
                                        <td>
                                            <a class="btn btn-info"
                                               href="{{ route('hr.personal.edit', $personal->id) }}"
                                               role="button">
                                                Editar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <!-- footer-->
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table').DataTable({
                "language": {
                    "url": "{{ asset('plugins/datatable/lang/esp.lang') }}"
                }
            });
        });
    </script>
@endsection
