<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Datos personales</h3>
        </div>

        <div class="form-group">
            {!! Form::label('DATE_OF_BIRTH', 'Fecha de Nacimiento') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('DATE_OF_BIRTH', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            {{ Form::radio('SEX', 'M', false) }} Hombre
        <br>
            {{ Form::radio('SEX', 'F', false) }} Mujer
        </div>
        <div class="form-group">
            {!! Form::label('idtipo_doc', 'Tipo de documento') !!}
            {!! Form::select('idtipo_doc', $tipo_docs, null, ['class' => 'form-control', 'required'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('EMPLOYEE_NUMBER', 'Número de Documento') !!}
            {!! Form::text('EMPLOYEE_NUMBER', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
        </div>
    </div>
</div>