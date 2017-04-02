@extends('layouts.layout')

@section('title', 'Crear usuario')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    @include('hr.partials.errors')
                    <h3 class="box-title">Nombre: {{ $persona->first_LAST_NAME }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Contenido-->
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                                <p>Nombre: </p>
                        </div>

                         FIRST_NAME', 50);
                         SECOND_NAME', 50);
                         first_LAST_NAME', 50);
                         SECOND_LAST_NAME', 50);

                           DATE_OF_BIRTH');
                        $table->enum('SEX', ['M', 'F']);
                          idtipo_doc')->unsigned();
                          EMPLOYEE_NUMBER');

                           EFFECTIVE_START_DATE');
                           EFFECTIVE_END_DATE');
                          idposition')->unsigned();
                         EMAIL_ADDRESS');
                         TELEF1');
                         TELEF2');

                          SALARY');
                          SOLD_MIN');
                          DISCCOUNT');

                         COUNTRY', 50);
                         ADDRESS', 50);

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
@endsection


