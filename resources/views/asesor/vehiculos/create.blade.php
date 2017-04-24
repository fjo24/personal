@extends('layouts.admin')

@section('title', 'Registro de Vehiculo')

@section('contenido')
    {!! Form::open(['route' => 'asesor.vehiculos.store', 'class' => 'form', 'method' => 'POST', 'id' => 'form']) !!}
    @include('asesor.vehiculos.partials.fileds')
    <div class="for text-center">
        {!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
        <a class="btn btn-danger" href="{{ route('asesor.vehiculos.index')}}">
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

    <script type="text/javascript">
        $("select[name='idmarca']").change(function () {
            var idmarca = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "{{route('select-ajax')}}",
                method: 'POST',
                data: {idmarca: idmarca, _token: token},
                success: function (data) {
                    $("select[name='idmodelo'").html('');
                    $("select[name='idmodelo'").html(data.options);
                }
            });
        });
    </script>
@endsection
