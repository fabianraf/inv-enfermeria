@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-8">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Informacion Personal</h1>
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
								<strong>Cedula:</strong>														
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
								<strong>Direccion:</strong>														
							</td>
							<td align='left'>
								{{ $user->direccion }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Telefono:</strong>													
							</td>
							<td align='left'>
								{{ $user->telefono }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Fecha de nacimiento:</strong>														
							</td>
							<td align='left'>
								{{ Form::text('fecha_nacimiento', '', array('class' => 'form-control','placeholder' => $user->fecha_nacimiento,'id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Genero:</strong>
							</td>
							<td align='left'>
								<select name="genero" id="genero">
									<option value="0">--Seleccione--</option>
									<option value="H" <?php if($user->genero=='H') { echo 'selected'; } ?> >Hombre</option>
									<option value="M" <?php if($user->genero=='M') { echo 'selected'; } ?> >Mujer</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>		
								<strong name="personas_hogar" id="personas_hogar">Con quien vives?</strong>
							</td>
							<td align='left'>
								<select name="personas_hogar" id="personas_hogar">
									<option>--Seleccione--</option>
									<option <?php if($user->personas_hogar=='Padres/Abuelos') { echo 'selected'; } ?> >Padres/Abuelos</option>
									<option <?php if($user->personas_hogar=='Pareja') { echo 'selected'; } ?> >Pareja</option>
									<option <?php if($user->personas_hogar=='Sólo/a') { echo 'selected'; } ?> >Sólo/a</option>
									<option <?php if($user->personas_hogar=='Otros') { echo 'selected'; } ?> >Otros</option>
								</select>
							</td>
						</tr>
					</table>
					<br>					
					{{ Form::submit('Guardar', array('class'=>'btn btn-success')) }}</br></br>
				</div>
				{{ Form::close() }}

				
				
		</div>

</div>
	

@stop
	
	