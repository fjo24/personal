

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <!--Datos generales-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                Datos Generales
            </h3>
        </div>
        <div class="form-group">
            {!! Form::label('FIRST_NAME', 'Primer Nombre') !!}
                                                    {!! Form::text('FIRST_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('SECOND_NAME', 'Segundo Nombre') !!}
                                                    {!! Form::text('SECOND_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('first_LAST_NAME', 'Apellido Paterno') !!}
                                                    {!! Form::text('first_LAST_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('SECOND_LAST_NAME', 'Apellido Materno') !!}
                                                    {!! Form::text('SECOND_LAST_NAME', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
        </div>
    </div>
</div>
