@extends('hr.template.main')

@section('title', 'Listado de empleados')

@section('content')
<a class="btn btn-danger" href="{{ route('hr.personal.create') }}">
    Nuevo
</a>
<a class="btn btn-info" href="{{ route('hr.personal.create') }}">
    Registro
</a>
<table class="table table-striped">
    <thead>
        <th>
            NOMBRE COMPLETO
        </th>
        <th>
            FECHA CESE
        </th>
        <th>
            SALARIO
        </th>
        <th>
            TOTAL VENTAS
        </th>
        <th>
            OPCIONES
        </th>
    </thead>
    <tbody>
        @foreach($personal as $person)
        <tr>
            <td>
                {{ $person->FIRST_NAME }}
            </td>
            <td>
                {{ $person->EFFECTIVE_END_DATE }}
            </td>
            <td>
                {{ $person->SALARY }}
            </td>
            <td>
                {{ $person->SOLD_MIN }}
            </td>
            <td>
                FALTA RELACIONAR
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
