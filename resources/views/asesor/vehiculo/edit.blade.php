@extends('layouts.admin')

@section('title', 'Editar vehiculo')



@section('contenido')
    {!! Form::model($vehiculos, ['route' => ['asesor.vehiculo.update', $vehiculos], 'method' => 'PUT']) !!}
    @include('asesor.vehiculo.partials.fields')
    <div class="for text-center">
        {!! Form::submit('Editar', ['class'=> 'btn btn-primary']) !!}
        <a class="btn btn-danger" href="{{ route('asesor.vehiculo.index')}}">
            Cancelar
        </a>
    </div>

    {!! Form::close() !!}
@endsection

@section('js')
    <script type="text/javascript">
        //datepicker
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true
        });
        //Para activacion de textarea mediante checkbox
        function showContent() {
            element = document.getElementById("content");
            check = document.getElementById("check");
            if (check.checked) {
                element.style.display = 'block';
            }
            else {
                element.style.display = 'none';
            }
        }
    </script>
@endsection
