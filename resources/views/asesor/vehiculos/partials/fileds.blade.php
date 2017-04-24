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
                        <div class="col-md-8 col-md-offset-2">
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
                                    <select id="año" name="año" class="form-control ">
                                        @for ($i = 0; $i < 30; $i++)
                                            {{$y = Carbon\Carbon::now()->subYear($i)->format('Y')}}
                                            <option value="{{$y}}">{{$y}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('color', 'Color') !!}
                                    {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('combustion', 'Tipo de Combustión:') !!}
                                    <br>
                                    {{ Form::checkbox('combustion_gas', '1', false) }} Gasolina
                                    <br>
                                    {{ Form::checkbox('combustion_glp', '1', false) }} GLP
                                    <br>
                                    {{ Form::checkbox('combustion_gnv', '1', false) }} GNV
                                    <br>
                                    {{ Form::checkbox('combustion_petroleo', '1', false) }} Petrolero
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
                            <input type="checkbox" name="no_atender" id="check" value="no_atendido"
                                   onchange="javascript:showContent()"/></body><br><br>
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