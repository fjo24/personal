@extends('layouts.layout')

@section('title', 'Crear usuario')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                @include('hr.partials.errors')
                <h3 class="box-title">
                    {{ $persona->first_LAST_NAME ." ". $persona->SECOND_LAST_NAME .", ". $persona->FIRST_NAME ." ". $persona->SECOND_NAME  }}
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--Contenido-->
                        <p>
                            Email: {{ $persona->EMAIL_ADDRESS }}
                        </p>
                        <p>
                            Fecha de nacimiento: {{ $persona->DATE_OF_BIRTH }}
                        </p>
                        <p>
                            Tipo de documento: {{ $persona->idtipo_doc }}
                        </p>
                        <p>
                            Numero de documento: {{ $persona->EMPLOYEE_NUMBER }}
                        </p>
                        <p>
                            Fecha de Ingreso: {{ $persona->EFFECTIVE_START_DATE }}
                        </p>
                        <p>
                            Fecha de cese: {{ $persona->EFFECTIVE_END_DATE }}
                        </p>
                        <p>
                            ID Puesto: {{ $persona->idposition }}
                        </p>
                        <p>
                            Telefono: {{ $persona->TELEF1 }}
                        </p>
                        <p>
                            Celular: {{ $persona->TELEF2 }}
                        </p>
                        <p>
                            Salario: {{ $persona->SALARY }}
                        </p>
                        <p>
                            Venta minima: {{ $persona->SOLD_MIN }}
                        </p>
                        <p>
                            Descuento: {{ $persona->DISCCOUNT }}
                        </p>
                        <p>
                            Distrito: {{ $persona->COUNTRY }}
                        </p>
                        <p>
                            Dirección: {{ $persona->ADDRESS }}
                        </p>
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
@endsection
