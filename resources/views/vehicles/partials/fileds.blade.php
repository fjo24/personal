<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                @include('hr.partials.errors')
                <h3 class="box-title">Nuevo Vehiculo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--Contenido-->
                        <div class="col-md-8 col-md-offset-2">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Datos generales</h3>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('idmarca', 'Marca') !!}
                                    {!! Form::select('idmarca', $marcas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione marca', 'required'])!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('idmodelo', 'Modelo') !!}
                                    {!! Form::select('idmodelo', $modelos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione modelo', 'required'])!!}
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>