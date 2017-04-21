@extends('layouts.admin')

@section('title', 'Editar Vehiculo')



@section('contenido')
    {!! Form::model($vehiculos, ['route' => ['hr.vehiculos.update', $vehiculos], 'method' => 'PUT']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    @include('hr.partials.errors')
                    <h3 class="box-title">Nuevo Vehiculo</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Contenido-->
                                      <div class="col-md-6">
                                        <div class="box box-primary">
                                          <div class="box-header with-border">
                                              <h3 class="box-title">Datos generales</h3>
                                          </div>
                                          <div class="form-group">
                                              {!! Form::label('placa', 'Placa') !!}
                                              {!! Form::text('placa', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                          </div>
                                          <div class="form-group">
                                              {!! Form::label('idmarca', 'Marca') !!}
                                              {!! Form::select('idmarca', $marcas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione marca', 'required'])!!}
                                          </div>
                                          <div class="form-group">
                                              {!! Form::label('idmodelo', 'Modelo') !!}
                                              {!! Form::select('idmodelo', $modelos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione modelo', 'required'])!!}
                                          </div>
                                          <div class="form-group">
                                              {!! Form::label('año', 'Año') !!}
                                              {!! Form::text('año', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                          </div>
                                          <div class="form-group">
                                              {!! Form::label('color', 'Color') !!}
                                              {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                          </div>
                                          <div class="form-group">
                                                  {!! Form::label('combustion', 'Tipo de Combustión:') !!}
                                              <br>
                                                  {{ Form::checkbox('combustion_gas', 'si', false) }} Combustión GAS
                                              <br>
                                                  {{ Form::checkbox('combustion_glp', 'si', false) }} Combustión GLP
                                              <br>
                                                  {{ Form::checkbox('combustion_gnv', 'si', false) }} Combustión GNV
                                              <br>
                                                  {{ Form::checkbox('combustion_petroleo', 'si', false')) }} Combustión Petróleo
                                          </div>
                                          <div class="form-group">
                                              {!! Form::label('num_motor', 'Numero de Motor') !!}
                                              {!! Form::text('num_motor', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                          </div>    
                                          <div class="form-group">
                                              {!! Form::label('km', 'Kilometraje') !!}
                                              {!! Form::text('km', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                          </div>                               
                                        </div>
                                        <div class="form-group">
                                          {!! Form::label('proxima_visita', 'Próxima Visita') !!}
                                          <div class="input-group date">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                              </div>
                                              {!! Form::text('proxima_visita', null, ['class' => 'form-control datepicker', 'placeholder' => '']) !!}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                              No atender {{ Form::checkbox('no_atender', 'no_atendido', false) }}
                                        </div>
                                        <div class="form-group">
                                              {!! Form::label('idcliente', 'Propietario') !!}
                                              {!! Form::select('idcliente', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione propietario', 'required'])!!}
                                        </div>
                                        <div class="form-group">
                                              {!! Form::label('motivo_no_atencion', 'Motivo de no atención') !!}
                                              {!! Form::textarea('motivo_no_atencion', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                        </div>
                                      </div>

                        </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="for text-center">
        {!! Form::submit('Editar', ['class'=> 'btn btn-primary']) !!}
        <a class="btn btn-danger" href="{{ route('hr.vehiculos.index')}}">
            Cancelar
        </a>
    </div>

    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $(".inputmask1").inputmask("(999) 9999999");
        $(".inputmask2").inputmask("(999) 999999999");
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true
        });

    </script>
@endsection
