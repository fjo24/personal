@extends('hr.template.main')

<form action="{{route ('hr.personal.index')}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                                            <label for="nombre">
                                                Primer Nombre
                                            </label>
                                            <input class="form-control" id="FIRST_NAME" name="FIRST_NAME" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Segundo Nombre
                                            </label>
                                            <input class="form-control" id="SECOND_NAME" name="SECOND_NAME" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Apellido Paterno
                                            </label>
                                            <input class="form-control" id="first_LAST_NAME" name="first_LAST_NAME" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Apellido Materno
                                            </label>
                                            <input class="form-control" id="SECOND_LAST_NAME" name="SECOND_LAST_NAME" placeholder="" required="required" type="text">
                                            </input>
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
                                            <label for="nombre">
                                                Fecha de Nacimiento
                                            </label>
                                            <input class="form-control" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" placeholder="" required="required" type="text">
                                            </input>
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
                                            <label for="type">
                                                Tipo Documento
                                            </label>
                                            <select class="form-control" id="idtipo_doc" name="idtipo_doc">
                                                <option selected="selected" value="">
                                                </option>
                                                <option value="member">
                                                    Miembro
                                                </option>
                                                <option value="admin">
                                                    Administrador
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Numero de Documento
                                            </label>
                                            <input class="form-control" id="EMPLOYEE_NUMBER" name="EMPLOYEE_NUMBER" placeholder="" required="required" type="text">
                                            </input>
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
                                            <label for="nombre">
                                                Fecha de Ingreso
                                            </label>
                                            <input class="form-control" id="EFFECTIVE_START_DATE" name="EFFECTIVE_START_DATE" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Fecha de Cese
                                            </label>
                                            <input class="form-control" id="EFFECTIVE_END_DATE" name="EFFECTIVE_END_DATE" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">
                                                Puesto
                                            </label>
                                            <select class="form-control" id="type" name="type">
                                                <option selected="selected" value="">
                                                </option>
                                                <option value="member">
                                                    Miembro
                                                </option>
                                                <option value="admin">
                                                    Administrador
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Correo
                                            </label>
                                            <input class="form-control" id="EMAIL_ADDRESS" name="EMAIL_ADDRESS" placeholder="" required="required" type="email">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Telefono
                                            </label>
                                            <input class="form-control" id="TELEF1" name="TELEF1" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Celular
                                            </label>
                                            <input class="form-control" id="TELEF2" name="TELEF2" placeholder="" required="required" type="text">
                                            </input>
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
                                            <label for="nombre">
                                                Salario
                                            </label>
                                            <input class="form-control" id="SALARYSOLD_MIN" name="SALARY" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Venta Minima
                                            </label>
                                            <input class="form-control" id="SOLD_MIN" name="SOLD_MIN" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Descuento
                                            </label>
                                            <input class="form-control" id="DISCCOUNT" name="DISCCOUNT" placeholder="" required="required" type="text">
                                            </input>
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
                                            <label for="nombre">
                                                Distrito
                                            </label>
                                            <input class="form-control" id="COUNTY" name="COUNTY" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">
                                                Direccion
                                            </label>
                                            <input class="form-control" id="ADDRESS" name="ADDRESS" placeholder="" required="required" type="text">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                Guardar
            </button>
            <a class="btn btn-danger" href="{{route ('hr.personal.index')}}">
                Cancelar
            </a>
        </div>
    </div>
</form>
@stop
