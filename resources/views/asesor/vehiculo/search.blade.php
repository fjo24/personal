@extends('layouts.admin')

@section('title', 'Busqueda de Vehiculo')

@section('contenido')
    {!! Form::open(['route' => 'query', 'class' => 'form', 'method' => 'POST', 'id' => 'form']) !!}
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <div class="box-header with-border">
                        @include('hr.partials.errors')
                        <h3 class="box-title">BUSQUEDA AVANZADA</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!--Contenido-->
                                <div class="col-md-12">
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">DATOS DEL VEHICULO</h3>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!! Form::label('idmarca', 'MARCA') !!}
                                                {!! Form::select('idmarca', $marcas, null, ['class' => 'form-control', 'aria-describedby'=>'buscador', 'placeholder' => ''])!!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('idmodelo', 'MODELO')!!}
                                                {!! Form::select('idmodelo', $modelos, null, ['class' => 'form-control', 'aria-describedby'=>'buscador', 'placeholder' => ''])!!}
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    {!! Form::label('año', 'DESDE AÑO') !!}
                                                    <select id="año1" name="año1" class="form-control" aria-describedby="buscador" placeholder = "">
                                                        <option value="">
                                                        </option>
                                                        @for ($i = 0; $i < 30; $i++)
                                                            {{$y = Carbon\Carbon::now()->subYear($i)->format('Y')}}
                                                            <option value="{{$y}}"
                                                                    @if(isset($vehiculos->año)&& $vehiculos->año == $y)
                                                                    selected
                                                                    @endif>{{$y}}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::label('año', 'HASTA AÑO') !!}
                                                    <select id="año2" name="año2" class="form-control" aria-describedby="buscador">
                                                        <option value="">
                                                        </option>
                                                        @for ($i = 0; $i < 30; $i++)
                                                            {{$y = Carbon\Carbon::now()->subYear($i)->format('Y')}}
                                                            <option value="{{$y}}"
                                                                    @if(isset($vehiculos->año)&& $vehiculos->año == $y)
                                                                    selected
                                                                    @endif>{{$y}}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        {!! Form::label('combustion', 'TIPO DE COMBUSTION:') !!}
                                                        <br>
                                                        <div class="col-md-6">
                                                            {{ Form::hidden('combustion_gas', 0) }}
                                                            {{ Form::checkbox('combustion_gas', '1') }} GASOLINA
                                                            {{ $errors->first('combustion_gas', '<p class="error">:message</p>') }}
                                                            <br>
                                                            {{ Form::hidden('combustion_glp', 0) }}
                                                            {{ Form::checkbox('combustion_glp', '1') }} GLP
                                                            {{ $errors->first('combustion_glp', '<p class="error">:message</p>') }}
                                                            <br>
                                                        </div>
                                                        <div class="col-md-6">
                                                            {{ Form::hidden('combustion_gnv', 0) }}
                                                            {{ Form::checkbox('combustion_gnv', '1') }} GNV
                                                            {{ $errors->first('combustion_gnv', '<p class="error">:message</p>') }}
                                                            <br>
                                                            {{ Form::hidden('combustion_petroleo', 0) }}
                                                            {{ Form::checkbox('combustion_petroleo', '1') }} PETROLEO
                                                            {{ $errors->first('combustion_petroleo', '<p class="error">:message</p>') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        {!! Form::label('proxima_visita1', 'PROXIMA VISITA DESDE') !!}<br>
                                                        <div class="input-group date">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            {!! Form::text('proxima_visita1', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'aria-describedby'=>'buscador']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {!! Form::label('proxima_visita2', 'PROXIMA VISITA HASTA') !!}<br>
                                                        <div class="input-group date">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            {!! Form::text('proxima_visita2', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'aria-describedby'=>'buscador']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    {{ Form::hidden('no_atender', 0) }}
                                                    {{ Form::checkbox('no_atender', '1') }} NO ATENDIDO
                                                    {{ $errors->first('no_atender', '<p class="error">:message</p>') }}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="for text-center">
                                            {!! Form::submit('ENCONTRAR', ['class'=> 'btn btn-primary']) !!}
                                            {!! Form::reset('LIMPIAR', ['class'=> 'btn btn-primary']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </form>
@endsection

@section('js')

    <script type="text/javascript">
        //datepicker
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true
        });
        $("select[name='idmarca']").change(function () {
            var idmarca = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "{{route('select-ajax')}}",
                method: 'POST',
                data: {idmarca: idmarca, _token: token},
                success: function (data) {
                    $("select[name='idmodelo'").html('');
                    $("select[name='idmodelo'").html(data.options);
                }
            });
        });

    </script>
@endsection
