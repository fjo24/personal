@extends('layouts.admin')

@section('title', 'Editar Empleado')



@section('contenido')
    {!! Form::model($personal, ['route' => ['hr.personal.update', $personal], 'method' => 'PUT']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    @include('hr.partials.errors')
                    <h3 class="box-title">Editar Empleado</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Contenido-->
                            @include('hr.partials.datosgenerales')
                            @include('hr.partials.datospersonales')
                        </div>
                        @include('hr.partials.laboral')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="for text-center">
        {!! Form::submit('Editar', ['class'=> 'btn btn-primary']) !!}
        <a class="btn btn-danger" href="{{ route('hr.personal.index')}}">
            Cancelar
        </a>
    </div>
    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $(".inputmask").inputmask("(999) 999999999");

        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true
        });

    </script>
@endsection