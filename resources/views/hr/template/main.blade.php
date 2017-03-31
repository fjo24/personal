<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Default') / Panel de Administración
        </title>
        <link href="{{ asset ('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        </link>
    </head>
    <body>
        <div class="box">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            @yield('title')
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
        </div>
    </body>
</html>
