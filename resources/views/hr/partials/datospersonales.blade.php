                                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                        <!--Datos Personales-->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    Datos Personales
                                                </h3>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('DATE_OF_BIRTH', 'Fecha de Nacimiento') !!}
                                                {!! Form::text('DATE_OF_BIRTH', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'required']) !!}
                                            </div>
                                            <div class="form-group">
                                                <label for="nombre">
                                                    Sexo
                                                </label>
                                                <div class="radio">
                                                    <label>
                                                        <input checked="" id="SEX" name="SEX" type="radio"
                                                               value="M">
                                                        Hombre
                                                        </input>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input id="SEX" name="SEX" type="radio" value="F">
                                                        Mujer
                                                        </input>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('idtipo_doc', 'Tipo de documento') !!}
                                                {!! Form::select('idtipo_doc', $Tipo_docs, null, ['class' => 'form-control documento', 'required'])!!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('EMPLOYEE_NUMBER', 'Numero de Documento') !!}
                                                {!! Form::text('EMPLOYEE_NUMBER', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                            </div>
                                        </div>
                                    </div>