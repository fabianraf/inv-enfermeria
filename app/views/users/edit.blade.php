@extends('layouts.default')

	
@section('content')


@if($errors->any())
 <div class="alert alert-danger alert-block">
   <ul>
     {{ implode('', $errors->all('<li class="error">:message</li>')) }}
   </ul>
 </div>
 @endif

<!-- Success-Messages -->
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Error</h4>
                        {{{ $message }}}
                    </div>
                @endif
	
<div class="col-lg-8">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Datos personales</h1>
    <hr>
    	{{ Form::open(array('url' => 'edit')) }}
			<div class="col row">		
				<div class="col-md-4 col-lg-8" >
					<table class="table table-bordered col-lg-12">
						<tr>
							<td>		
								<strong>Email:</strong>															
							</td>
							<td align='left'>
								{{ $user->email }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Cédula:</strong>														
							</td>
							<td align='left'>
								{{ $user->cedula }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Nombre:</strong>														
							</td>
							<td align='left'>
								{{ $user->nombre }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Apellido:</strong>														
							</td>
							<td align='left'>
								{{ $user->apellido }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Dirección:</strong>														
							</td>
							<td align='left'>
								{{ $user->direccion }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Teléfono:</strong>													
							</td>
							<td align='left'>
								{{ $user->telefono }}
							</td>
						</tr>
					</table>

					<div class="col-lg-12">		
    					<div class="alert alert-success">
        				<a href="#" class="close" data-dismiss="alert">&times;</a>
							{{'Por favor completa la siguiente información'}}
    					</div>
    				</div>

					<table class="table table-bordered col-lg-12">
						<tr>
							<td>		
								<strong>Fecha de nacimiento:</strong>														
							</td>
							<td align='left'>
								{{ Form::text('fecha_nacimiento',Input::old('fecha_nacimiento'), array('class' => 'form-control','placeholder' => $user->fecha_nacimiento,'id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Género:</strong>
							</td>
							<td align='left'>
								<select name="genero" id="genero">
									<option value="">--Seleccione--</option>
									<option value="H" <?php if(Input::old('genero')=='H') { echo 'selected'; }?> >Hombre</option>
									<option value="M" <?php if(Input::old('genero')=='M') { echo 'selected'; } ?> >Mujer</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>		
								<strong name="personas_hogar" id="personas_hogar">Con quien vives?</strong>
							</td>
							<td align='left'>
								<select name="personas_hogar" id="personas_hogar">
									<option value="">--Seleccione--</option>
									<option <?php if(Input::old('personas_hogar')=='Padres/Abuelos') { echo 'selected'; }?> >Padres/Abuelos</option>
									<option <?php if(Input::old('personas_hogar')=='Pareja') { echo 'selected'; }?> >Pareja</option>
									<option <?php if(Input::old('personas_hogar')=='Sólo/a') { echo 'selected'; }?> >Sólo/a</option>
									<option <?php if(Input::old('personas_hogar')=='Otros') { echo 'selected'; }?> >Otros</option>
								</select>
							</td>
						</tr>
					</table>
					<br>
					<button class='btn btn-success' style="white-space: normal" type='button' data-toggle="modal" data-target="#confirmDelete" 
					data-title="Atención" 
					data-message='Una vez guardada tu información personal, no podrás volver a editarla.
					Estás seguro que deseas continuar?'>Guardar</button>
					<!--{{ Form::submit('Guardar', array('class'=>'btn btn-success')) }}</br></br>-->

				</div>
				{{ Form::close() }}			
		</div>
	</div>
	
@include('layouts.confirm')
@stop