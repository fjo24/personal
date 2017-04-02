                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel with-nav-tabs panel-default">
                                        <div class="panel-heading">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab1default">
                                                        Informacion Laboral
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab2default">
                                                        Informacion Salarial
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab3default">
                                                        Ubicacion Geografica
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="tab1default">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    {!! Form::label('EFFECTIVE_START_DATE', 'Fecha de Ingreso') !!}
                                                                    {!! Form::text('EFFECTIVE_START_DATE', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('EFFECTIVE_END_DATE', 'Fecha de Cese') !!}
                                                                    {!! Form::text('EFFECTIVE_END_DATE', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('idposition', 'Puesto') !!}
                                                                    {!! Form::select('idposition', $Position, null, ['class' => 'form-control puesto', 'required'])!!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    {!! Form::label('EMAIL_ADDRESS', 'Correo') !!}
                                                                    {!! Form::email('EMAIL_ADDRESS', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('TELEF1', 'Telefono') !!}
                                                                    {!! Form::text('TELEF1', null, ['class' => 'form-control phonemask', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('TELEF2', 'Celular') !!}
                                                                    {!! Form::text('TELEF2', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2default">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    {!! Form::label('SALARY', 'Salario') !!}
                                                                    {!! Form::text('SALARY', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('SOLD_MIN', 'Venta Minima') !!}
                                                                    {!! Form::text('SOLD_MIN', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    {!! Form::label('DISCCOUNT', 'Descuento') !!}
                                                                    {!! Form::text('DISCCOUNT', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3default">
                                                    <div class="form-group">
                                                        {!! Form::label('COUNTY', 'Distrito') !!}
                                                        {!! Form::text('COUNTY', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('ADDRESS', 'Direccion') !!}
                                                        {!! Form::text('ADDRESS', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>