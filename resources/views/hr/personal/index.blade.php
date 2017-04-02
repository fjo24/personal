@extends('layouts.layout')

@section('title', 'Listado de empleados')

@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Listado de empleados</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-danger btn-sm" href="{{ route('hr.personal.create') }}">NUEVO REGISTRO</a>
                    <a class="btn btn-success btn-sm" href="/excel">IMPRIMIR REPORTE</a>
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
                                <th> FECHA CESE</th>
                                <th>SALARIO</th>
                                <th> TOTAL VENTAS</th>
                                <th>OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($personal as $person)
                                <tr>
                                    <td>
                                        {{ $person->first_LAST_NAME ." ". $person->SECOND_LAST_NAME .", ". $person->FIRST_NAME ." ". $person->SECOND_NAME  }}
                                    </td>
                                    <td>{{ $person->EFFECTIVE_END_DATE }} </td>
                                    <td>{{ $person->SALARY }}</td>
                                    <td>{{ $person->SALARY }}</td>
                                    <td>
                                        <a class="btn btn-info"
                                           href="{{ route('hr.personal.edit', $person->id) }}"
                                           role="button">
                                            Editar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        {{$personal->links()}}
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
