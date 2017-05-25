@extends('layouts.admin')

@section('title', 'Listado de vehiculos')

@section('contenido')
    <div class="box">
        @include('asesor.vehiculo.partials.success')
        <div class="box-header with-border">
            <h3 class="box-title">
                Listado de vehiculos
            </h3>
            <div class="box-tools">

                <div class="text-center">
                    <a class="btn btn-info btn-sm" href="{{route('search')}}">
                        ATRAS
                    </a>
                    <a class="btn btn-success btn-sm" href="{{route('exportquery')}}">
                        EXPORTAR
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
	                                <th>Placa</th>
	                                <th>Marca</th>
	                                <th>Modelo</th>
	                                <th>Tipo de combustión</th>
	                                <th>Numero de motor</th>
	                                <th>Kilometraje</th>
	                                <th>Proxima visita</th>
	                                <th>No atender</th>
	                                <th>Motivo de no atención</th>
	                                <th>ACCIONES</th>
	                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vehiculos as $vehiculo)
                                <tr>
                                    <td>
                                        {{ $vehiculo->placa }}
                                    </td>
                                    <td>
                                        {{ $vehiculo->marca->nombre }}
                                    </td>
                                    <td>
                                        {{ $vehiculo->modelo->nombre }}
                                    </td>
                                    <td>
                                        @if($vehiculo->combustion_gas != 0)
                                            Gasolina
                                        @endif
                                        @if($vehiculo->combustion_glp != 0)
                                            GLP
                                        @endif
                                        @if($vehiculo->combustion_gnv != 0)
                                            GNV
                                        @endif
                                        @if($vehiculo->combustion_petroleo != 0)
                                            Petrolero
                                        @endif
                                    </td>
                                    <td>
                                        {{ $vehiculo->num_motor }}
                                    </td>
                                    <td>
                                        {{ $vehiculo->km }}
                                    </td>
                                    <td>
                                        {{ $vehiculo->proxima_visita }}
                                    </td>
                                    <td>
                                        {{ $vehiculo->no_atender }}
                                    </td>
                                    <td>
                                        {{ $vehiculo->motivo_no_atencion }}
                                    </td>
                                    <td>
                                        <a href="{{ route('asesor.vehiculo.show', $vehiculo) }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('asesor.vehiculo.edit', $vehiculo) }}">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">

                        </div>
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