@extends('hr.template.main')

@section('title', 'Listado de empleados')

@section('content')
<a class="btn btn-danger" href="{{ route('hr.personal.create') }}">
    Nuevo
</a>
<a class="btn btn-info" href="{{ route('hr.personal.create') }}">
    Registro
</a>
<table cellspacing="0" class="table table-striped table-bordered" id="example" width="100%">
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
                {{ $persona->FIRST_NAME }}
            </td>
            <td>
                {{ $persona->EFFECTIVE_END_DATE }}
            </td>
            <td>
                {{ $persona->SALARY }}
            </td>
            <td>
                {{ $persona->SOLD_MIN }}
            </td>
            <td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
