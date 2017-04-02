<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Datos generales</h3>
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