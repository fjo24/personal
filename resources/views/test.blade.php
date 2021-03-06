@extends('hr.template.main')
@section('title', 'Crear usuario')


@section('content')
<div class="container">
    {!! Form::open(['route' => ['hr.personal.update', $personal->PERSON_ID], 'method' => 'PUT']) !!}
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
                                                    <input checked="" id="SEX" name="SEX" type="radio" value="M">
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
                            {!! Form::select('idposition', ['' => 'Seleccione un nivel de usuario', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    {!! Form::label('EMAIL_ADDRESS', 'Correo') !!}
        {!! Form::email('EMAIL_ADDRESS', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('TELEF1', 'Telefono') !!}
                            {!! Form::text('TELEF1', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
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
                                                <div class="tab-pane fade" id="tab4default">
                                                    Default 4
                                                </div>
                                                <div class="tab-pane fade" id="tab5default">
                                                    Default 5
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

    // phone mask
</script>
@endsection
