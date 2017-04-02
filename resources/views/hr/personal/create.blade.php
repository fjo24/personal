@extends('hr.template.main')
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
                                @section('content')
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <h3>
                                                Nuevo Empleado
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                            <!--Datos generales-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        Datos Generales
                                                    </h3>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('FIRST_NAME', 'Primer Nombre') !!}
                                                    {!! Form::text('FIRST_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('SECOND_NAME', 'Segundo Nombre') !!}
                                                    {!! Form::text('SECOND_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('first_LAST_NAME', 'Apellido Paterno') !!}
                                                    {!! Form::text('first_LAST_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('SECOND_LAST_NAME', 'Apellido Materno') !!}
                                                    {!! Form::text('SECOND_LAST_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                            <!--Datos Personales-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        Datos Personales
                                                    </h3>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('DATE_OF_BIRTH', 'Fecha de Nacimiento') !!}
                                                    {!! Form::text('DATE_OF_BIRTH', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'required']) !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="nombre">
                                                        Sexo
                                                    </label>
                                                    <div class="radio">
                                                        <label>
                                                            <input checked="" id="SEX" name="SEX" type="radio"
                                                                   value="M">
                                                            Hombre
                                                            </input>
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input id="SEX" name="SEX" type="radio" value="F">
                                                            Mujer
                                                            </input>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('idtipo_doc', 'Tipo de documento') !!}
                                                    {!! Form::select('idtipo_doc', $Tipo_docs, null, ['class' => 'form-control documento', 'required'])!!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('EMPLOYEE_NUMBER', 'Numero de Documento') !!}
                                                    {!! Form::text('EMPLOYEE_NUMBER', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#tab1default">
                                                            Informacion Laboral
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab2default">
                                                            Informacion Salarial
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab3default">
                                                            Ubicacion Geografica
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tab1default">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('EFFECTIVE_START_DATE', 'Fecha de Ingreso') !!}
                                                                        {!! Form::text('EFFECTIVE_START_DATE', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        {!! Form::label('EFFECTIVE_END_DATE', 'Fecha de Cese') !!}
                                                                        {!! Form::text('EFFECTIVE_END_DATE', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        {!! Form::label('idposition', 'Puesto') !!}
                                                                        {!! Form::select('idposition', $Position, null, ['class' => 'form-control puesto', 'required'])!!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('EMAIL_ADDRESS', 'Correo') !!}
                                                                        {!! Form::email('EMAIL_ADDRESS', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        {!! Form::label('TELEF1', 'Telefono') !!}
                                                                        {!! Form::text('TELEF1', null, ['class' => 'form-control phonemask', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        {!! Form::label('TELEF2', 'Celular') !!}
                                                                        {!! Form::text('TELEF2', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2default">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('SALARY', 'Salario') !!}
                                                                        {!! Form::text('SALARY', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        {!! Form::label('SOLD_MIN', 'Venta Minima') !!}
                                                                        {!! Form::text('SOLD_MIN', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('DISCCOUNT', 'Descuento') !!}
                                                                        {!! Form::text('DISCCOUNT', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3default">
                                                        <div class="form-group">
                                                            {!! Form::label('COUNTY', 'Distrito') !!}
                                                            {!! Form::text('COUNTY', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!! Form::label('ADDRESS', 'Direccion') !!}
                                                            {!! Form::text('ADDRESS', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
