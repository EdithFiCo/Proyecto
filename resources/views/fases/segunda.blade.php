@extends('layout.admin')

@section('content')

<meta charset="UTF-8">

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info text-center font-size:24">
                Etapa Adjuntación y Contratación</div>

                <table class="table">
                <thead>
                    <tr>
                      <th></th>
                        <th>Oficio de aprobación con anexos técnicos</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                	<tr class="active">
                        <td></td>
                        <td></td>
                        <td><div class="form-group">
					          {!! Form::label('Monto') !!}
					          {!! Form::number('Monto',null,['class'=>'form-control', 'placeholder'=>'$']) !!}
					        </div></td>
					        
                    </tr>
                    <tr class="active">
                        <td></td>
                        <td>
                        <label class="radio">
			              <input type="radio" name="optradio">Adjuntación Directa
			            </label>
			            <label class="radio">
			              <input type="radio" name="optradio">Invitación
			            </label>
			            <label class="radio">
			              <input type="radio" name="optradio">Licitación Pública
			            </label>
                        </td>
                        <td></td>
                    </tr>

                    


                </tbody>

               
        </div>
    </div>
</div>


@endsection