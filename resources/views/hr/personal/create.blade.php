@extends('hr.template.main')

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
                                <div class="panel panel-info">
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
                                <div class="panel panel-info">
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
                                    <div class="form-group">
                                        {!! Form::label('idtipo_doc', 'Tipo Documento') !!}
                            {!! Form::select('idtipo_doc', ['' => 'Seleccione un nivel de usuario', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('EMPLOYEE_NUMBER', 'Numero de Documento') !!}
                            {!! Form::text('EMPLOYEE_NUMBER', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <!--info laboral-->
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Informacion Laboral
                                        </h3>
                                    </div>
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
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <!--info salarial-->
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Informacion Salarial
                                        </h3>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('SALARYSOLD_MIN', 'Salario') !!}
                            {!! Form::text('SALARYSOLD_MIN', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('SOLD_MIN', 'Venta Minima') !!}
                            {!! Form::text('SOLD_MIN', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('DISCCOUNT', 'Descuento') !!}
                            {!! Form::text('DISCCOUNT', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <!--info laboral-->
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Ubicacion Geo
                                        </h3>
                                    </div>
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
    <div class="for">
        {!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{ route('hr.personal.index')}}">
        Cancelar
    </a>
    </div>

</div>
{!! Form::close() !!}
@section('js')

<script>
$('.datepicker').datepicker({
    format: "yyyy-mm-dd",
    language: "es",
    autoclose: true
});
</script>
@endsection
