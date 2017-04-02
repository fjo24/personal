<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Default') / Panel de Administración
        </title>
        <link href="{{ asset ('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset ('plugins/chosen/chosen.css') }}" rel="stylesheet">
                <link href="{{ asset ('plugins/datatable/media/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css">
                    <link href="{{asset('plugins/datepicker/css/bootstrap-standalone.css')}}" rel="stylesheet">
                        <link href="{{asset('plugins/datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
                        <link href="{{asset('plugins/datatable/datatables.min.css')}}" rel="stylesheet">

    </head>
    <body>
        <div class="box">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            @yield('title')
                            @include('flash::message')
                            @include('hr.template.errors')
                        </h3>
                    </div>
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }} ">
            </script>
            <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }} ">
            </script>
            <script src="{{asset('plugins/datepicker/locales/bootstrap-datepicker.es.min.js')}}">
            </script>
            <script src="{{asset('plugins/datepicker/js/bootstrap-datepicker.js')}}">
            </script>
            <script src="{{ asset('plugins/chosen/chosen.jquery.js') }} ">
            </script>
            <script type="text/javascript" src="{{ asset('plugins/datatable/datatables.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('plugins/mask/jquery.mask.min.js') }}"></script>
        </div>
        @yield('js')
    </body>
</html>