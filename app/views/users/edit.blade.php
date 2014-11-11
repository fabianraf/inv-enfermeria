@extends('layouts.default')

	
@section('content')
{{ Form::open(array('url' => 'edit')) }}
	
<div class="col-lg-12">
	<h2>Editar perfil
	<div class="pull-right">
		{{ Form::submit('GUARDAR', array('class'=>'btn btn-success')) }}
		<!-- Mensaje de confirmación -->	
		<!--button class='btn btn-success' style="white-space: normal" type='button' data-toggle="modal" data-target="#confirmDelete" 
					data-title="Atención" 
					data-message='Una vez guardada tu información personal, no podrás volver a editarla.
					Estás seguro que deseas continuar?'>Guardar</button-->
	</div>
	</h2>
	<!-- Success-Messages -->
	@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-block">		
		<h4>Error</h4>
		{{{ $message }}}
	</div>
	@endif

	@if($errors->any())
	<div class="alert alert-danger alert-block">
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	</div>
	@endif
	<hr>

	<div class="row">
		<div class="col-md-4 col-lg-5" >
		<div class="alert alert-success">
				{{'Por favor actualiza tu información personal'}}					
			</div>
			<ul type = square>
				<p><li><strong>Email: </strong>{{ $user->email }}</p>
				<p><li><strong>Nombre: </strong>{{ $user->nombre.' '. $user->apellido}}</p>
				<p><li><strong>Cédula: </strong>{{ $user->cedula }}</p>
				<p><li><strong>Dirección: </strong>{{ Form::text('direccion', $user->direccion, array('size'=>'40'))}}</p>
				<p><li><strong>Teléfono: </strong>{{ Form::text('telefono', $user->telefono, array('size'=>'20'))}}</p>
				<p><li><strong>Fecha de nacimiento: </strong>{{ Form::text('fecha_nacimiento',$user->fecha_nacimiento, array('size'=>'10', 'id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
			});
			</script></p>
				<p><li><strong>Género: </strong><select name="genero" id="genero">					
					<option <?php if($user->genero=='M') { echo 'selected'; }?> value="M">Hombre</option>
					<option <?php if($user->genero=='F') { echo 'selected'; }?> value="F">Mujer</option>
				</select></p>       
				<p><li><strong>Con quien vives?: </strong><select name="personas_hogar" id="personas_hogar">					
					<?php if($user->personas_hogar=='') { echo 'selected'; ?><option value="">--Seleccione--</option><?php }?>
					<option <?php if($user->personas_hogar=='Padres/Abuelos') { echo 'selected'; }?> value="Padres/Abuelos">Padres/Abuelos</option>
					<option <?php if($user->personas_hogar=='Pareja') { echo 'selected'; }?> value="Pareja">Pareja</option>
					<option <?php if($user->personas_hogar=='Sólo/a') { echo 'selected'; }?> value="Sólo/a">Sólo/a</option>
					<option <?php if($user->personas_hogar=='Otros') { echo 'selected'; }?> value="Otros">Otros</option>
				</select>
			</ul>			
		</div>
		<div class="col-md-4 col-lg-5" >
			
			<ul type = square>
				
			</ul>
		</div>		
	</div>
</div>
{{ Form::close() }}			
	
@include('layouts.confirm')
@stop