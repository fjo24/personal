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
        @foreach($personal as $personal)
        <tr>
            <td>
                {{ $personal->FIRST_NAME }}
            </td>
            <td>
                {{ $personal->EFFECTIVE_END_DATE }}
            </td>
            <td>
                {{ $personal->SALARY }}
            </td>
            <td>
                
            </td>
            <td>
            <a href="{{ route('hr.personal.create') }}" onclick="return confirm('¿Realmente deseas borrar el usuario?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
                <a class="btn btn-info" href="{{ route('hr.personal.edit', $personal->PERSON_ID) }}" role="button">
                    Editar
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
