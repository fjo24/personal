<!DOCTYPE html>
<html>
    <head>
        <title>
            Laravel
        </title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
            <link href="{{ asset ('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
                <style>
                    html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
                </style>
            </link>
        </link>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    APP PERSONAL
                </div>
                <a class="btn btn-danger" href="{{ route('hr.personal.index') }}">
                    Ingreso
                </a>
            </div>
        </div>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }} ">
        </script>
    </body>
</html>
