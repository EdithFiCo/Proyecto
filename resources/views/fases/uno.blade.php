@extends('layout.admin')

@section('content')

    <meta charset="UTF-8">

    <div class="container background-white">
        <div class="row">
            <div class="col-md-12 background-white">
                <div class="alert alert-info text-center font-weight " >
                    Etapa Planeación Programación</div>
                <table class="table">
                    <thead>
                    <tr class="success">
                        <td></td>

                        <th>1</th>
                        <th>Documento</th>
                        <th>Archivo</th>
                        <th></th>
                        <th>Aceptado/No Aceptado</th>
                        <th>Nota</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td></td>
                        <td>Oficio de aprobación con anexos técnicos</td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>
                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>
                        <!--td>
                            <label class="radio-inline">
                              <input type="radio" name="optradio">SI
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="optradio">NO
                            </label>
                        </td-->


                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options1" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options1" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <thead>
                    <tr class="success">
                        <td></td>
                        <th>2</th>
                        <th>Cédula de información</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                    </thead>




                    <tr class="active ">



                        {!! Form::open(['route'=>['faseuno.boton2',$proyecto],'method'=>'POST']) !!}
                        <td><div class="text-center"><input type="checkbox"  name="check_button2" class="default"></div></td>
                        <td>2.1 </td>
                        <td>Cédula de información básica</td>
                        <td>{!! Form::submit('archivo1',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options2" id="option1" autocomplete="off" value="1" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options2" id="option2" autocomplete="off" value="0">NA
                                </label>
                            </div></td>


                        <td><textarea class="form-control" rows="2" maxlength= 100 name="descripcion2"></textarea></td>
                        {!! Form::close() !!}




                    </tr>


                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.2</td>
                        <td>Catálogo de conceptos preliminares</td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options3" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options3" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.3</td>
                        <td>Calendarización preliminar</td>
                        <td> {!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options4" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options4" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.4</td>
                        <td>Validación y dictamen de factibilidad</td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options5" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options5" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.5</td>
                        <td>Croquis de localización de la obra</td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options6" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options6" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.6</td>
                        <td>Proyecto de la obra</td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options7" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options7" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.7</td>
                        <td>Permiso de la obra </td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options8" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options8" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.8</td>
                        <td>Acta de aceptación de comunidad o beneficiarios</td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options9" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options9" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>

                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.9</td>
                        <td>Acta constitutiva de comité
                            <div class="form-group">
                                {!! Form::label('Cargo') !!}
                                {!! Form::text('Cargo',null,['class'=>'form-control', 'placeholder'=>'Cargo']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Nombre') !!}
                                {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Teléfono') !!}
                                {!! Form::tel('telefono',null,['class'=>'form-control', 'placeholder'=>'Teléfono']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Correo') !!}
                                {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Correo']) !!}
                            </div>


                        </td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options10" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options10" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>




                    <tr class="active ">
                        <td><div class="text-center"><input type="checkbox" class="default"></div></td>
                        <td>2.10</td>
                        <td>Registro de asistencia de comité</td>
                        <td>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</td>

                        <td>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</td>

                        <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options11" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options11" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></td>
                    </tr>






                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>3</th>
                        <th>Acta de aceptación de la obra</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options12" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options12" id="option2" autocomplete="off">NA
                                </label>
                            </div></th>
                        <th><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>4</th>
                        <th>Proyecto ejecutivo</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options13" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options13" id="option2" autocomplete="off">NA
                                </label>
                            </div></th>
                        <th><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>5</th>
                        <th>Presupuesto base</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options14" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options14" id="option2" autocomplete="off">NA
                                </label>
                            </div></th>
                        <th><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>6</th>
                        <th>Estudios de mecánica de suelos</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options15" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options15" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>7</th>
                        <th>Impacto ambiental</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options16" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options16" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>8</th>
                        <th>Uso de suelo</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options17" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options17" id="option2" autocomplete="off">NA
                                </label>
                            </div></th>
                        <th><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>9</th>
                        <th>Permisos y licencia</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options18" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options18" id="option2" autocomplete="off">NA
                                </label>
                            </div></td>
                        <td><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>10</th>
                        <th>Tenencia de la tierra</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options19" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options19" id="option2" autocomplete="off">NA
                                </label>
                            </div></th>
                        <th><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">
                        <th><div class="text-center"><input type="checkbox" class="default"></div></th>
                        <th>11</th>
                        <th>Convenio de colaboración</th>
                        <th>{!! Form::submit('Cargar PDF',['class'=>'btn btn-success']) !!}</th>

                        <th>{!! Form::submit('Ver',['class'=>'btn btn-link']) !!}</th>

                        <th><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options20" id="option1" autocomplete="off" checked>A
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options20" id="option2" autocomplete="off">NA
                                </label>
                            </div></th>
                        <th><textarea class="form-control" rows="2"></textarea></th>
                    </tr>

                    <tr class="active ">

                    </tr>

                    <tr class="active ">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>

                        <td></td>
                        <td>{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection