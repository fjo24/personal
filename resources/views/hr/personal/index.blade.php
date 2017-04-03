@extends('layouts.layout')

@section('title', 'Listado de empleados')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                Listado de empleados
            </h3>
            <div class="box-tools">

                <div class="text-center">
                    <a class="btn btn-danger btn-sm" href="{{ route('hr.personal.create') }}">
                        NUEVO REGISTRO
                    </a>
                    <a class="btn btn-success btn-sm" href="{{route('export')}}">
                        IMPRIMIR REPORTE
                    </a>
                </div>

            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover display table-responsive table-condensed" id="table">
                            <thead>
                            <tr>
                                <th>NOMBRE COMPLETO</th>
                                <th>FECHA CESE</th>
                                <th>SALARIO</th>
                                <th>TOTAL VENTAS</th>
                                <th>OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($personal as $person)
                                <tr>
                                    <td>
                                        {{ $person->first_LAST_NAME ." ". $person->SECOND_LAST_NAME .", ". $person->FIRST_NAME ." ". $person->SECOND_NAME  }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($person->EFFECTIVE_END_DATE)->format('d/m/Y') }}
                                    </td>
                                    <td>
                                        {{ $person->SALARY }}
                                    </td>
                                    <td>
                                        {{ $person->SALARY }}
                                    </td>
                                    <td>
                                        <a href="{{ route('hr.personal.show', $person->id) }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a  href="{{ route('hr.personal.edit', $person->id) }}">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a  href="{{ route('hr.personal.edit', $person->id) }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
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
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table').DataTable({
                "language": {
                    "url": "{{ asset('AdminLTE/plugins/datatables/esp.lang') }}"
                }
            });
        });
    </script>
@endsection