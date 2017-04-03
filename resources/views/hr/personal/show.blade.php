        @extends('layouts.layout')

        @section('title', 'Crear usuario')

        @section('content')
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-solid box-primary">
                                <div class="box-header with-border">
                                    @include('hr.partials.errors')
                                    <h3 class="box-title">
                                        {{ $persona->first_LAST_NAME ." ". $persona->SECOND_LAST_NAME .", ". $persona->FIRST_NAME ." ". $persona->SECOND_NAME  }}
                                    </h3>
                                </div>
                                <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{ $persona->EMAIL_ADDRESS }}</td>
                                </tr>
                                <tr>
                                    <td>Fecha de nacimiento:</td> 
                                    <td>{{ $persona->DATE_OF_BIRTH }}</td>
                                </tr>
                                    <td>Tipo de documento: </td>
                                    <td>{{ $persona->idtipo_doc }}</td>
                                </tr>
                                <tr>
                                    <td>Numero de documento: </td>
                                    <td>{{ $persona->EMPLOYEE_NUMBER }}</td>
                                </tr>
                                <tr>
                                    <td>Fecha de Ingreso: </td>
                                    <td>{{ $persona->EFFECTIVE_START_DATE }}</td>
                                </tr>
                                    <td>Fecha de cese:</td>
                                    <td>{{ $persona->EFFECTIVE_END_DATE }}</td>
                                </tr>
                                <tr>
                                    <td>ID Puesto: </td>
                                    <td>{{ $persona->idposition }}</td>
                                </tr>
                                <tr>
                                    <td>Telefono:</td>
                                    <td>{{ $persona->TELEF1 }}</td>
                                </tr>
                                <tr>
                                    <td>Celular: </td>
                                    <td>{{ $persona->TELEF2 }}</td>
                                </tr>
                                <tr>
                                    <td>Salario: </td>
                                    <td>{{ $persona->SALARY }}</td>
                                </tr>
                                <tr>
                                    <td>Venta minima: </td>
                                    <td>{{ $persona->SOLD_MIN }}</td>
                                </tr>
                                <tr>
                                    <td>Descuento: </td>
                                    <td>{{ $persona->DISCCOUNT }}</td>
                                </tr>
                                <tr>
                                    <td>Distrito: </td>
                                    <td>{{ $persona->COUNTRY }}</td>
                                </tr>
                                <tr>
                                    <td>Dirección: </td>
                                    <td>{{ $persona->ADDRESS }}</td>
                                </tr>
                                </tbody>
                                </table>

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
