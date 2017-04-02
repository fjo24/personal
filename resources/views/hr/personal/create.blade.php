@extends('layouts.layout')

@section('title', 'Crear usuario')

@section('errors')

@section('content')
<div class="container">
    {!! Form::open(['route' => 'hr.personal.store', 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Panel para el Personal
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Contenido-->

@include('hr.partials.titulo')
                            <div class="row">
                                @include('hr.partials.datosgenerales')
@include('hr.partials.datospersonales')
                            </div>
                        </div>
                        @include('hr.partials.laboral')
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="for">
        {!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
        <a class="btn btn-danger" href="{{ route('hr.personal.index')}}">
            Cancelar
        </a>
    </div>
</div>
{!! Form::close() !!}
@endsection

@section('js')
<script>
    //datepicker


        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            language: "es",
            autoclose: true
        });

        //chosen
        $('.documento').chosen({
            placeholder_text_single: "Tipo de documento"
        });
        $('.puesto').chosen({
            placeholder_text_single: "Tipo de documento"
        });

        // phone mask


        $(document).ready(function () {
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 0000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                translation: {
                    'Z': {
                        pattern: /[0-9]/, optional: true
                    }
                }
            });
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.phonemask').mask("(000)000000000", {placeholder: "(___)_________"});
            $('.fallback').mask("00r00r0000", {
                translation: {
                    'r': {
                        pattern: /[\/]/,
                        fallback: '/'
                    },
                    placeholder: "(___)_________"
                }
            });
            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        });
</script>
@endsection





@endsection
