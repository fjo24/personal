@extends('layouts.admin')

@section('title', 'Editar Vehiculo')



@section('contenido')
    {!! Form::model($vehiculos, ['route' => ['hr.vehiculos.update', $vehiculos], 'method' => 'PUT']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    @include('hr.partials.errors')
                    <h3 class="box-title">Edición de Registro <del></del> Vehiculo</h3>
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
                                          <div class="form-group">
                                              {{ Form::hidden('combustion_gas', 0) }}
                                              {{ Form::checkbox('combustion_gas', 1) }} Combustion GAS
                                              {{ $errors->first('combustion_gas', '<p class="error">:message</p>') }}
                                          </div>
                                          
                                          <div class="form-group">
                                              {{ Form::hidden('combustion_glp', 0) }}
                                              {{ Form::checkbox('combustion_glp', 1) }} Combustion GLP
                                              {{ $errors->first('combustion_glp', '<p class="error">:message</p>') }}
                                          </div>
                                          <div class="form-group">
                                              {{ Form::hidden('combustion_gnv', 0) }}
                                              {{ Form::checkbox('combustion_gnv', 1) }} Combustion GNV
                                              {{ $errors->first('combustion_gnv', '<p class="error">:message</p>') }}
                                          </div>
                                          
                                          <div class="form-group">
                                              {{ Form::hidden('combustion_petroleo', 0) }}
                                              {{ Form::checkbox('combustion_petroleo', 1) }} Combustion petroleo
                                              {{ $errors->first('combustion_petroleo', '<p class="error">:message</p>') }}
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
                                              {!! Form::label('idcliente', 'Propietario') !!}
                                              {!! Form::select('idcliente', $clientes, null, ['class' => 'form-control', 'placeholder' => 'Seleccione propietario', 'required'])!!}
                                        </div>
                                        <b>No atender</b>

                                          <div class="form-group">
                                              {{ Form::hidden('no_atender', 'atendido') }}
                                            <input type="checkbox" name="no_atender" id="check" value="no_atendido" onchange="javascript:showContent()" /></body><br><br>
                                              {{ $errors->first('no_atender', '<p class="error">:message</p>') }}  
                                          </div>
                                        <div id="content" style="display: none;">
                                          <div class="form-group">
                                                {!! Form::label('motivo_no_atencion', 'Motivo de no atención') !!}
                                                {!! Form::textarea('motivo_no_atencion', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                          </div>
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
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true
        });
    </script>
@endsection
