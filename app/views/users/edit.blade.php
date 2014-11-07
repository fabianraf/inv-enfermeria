@extends('layouts.default')

	
@section('content')
{{ Form::open(array('url' => 'edit')) }}
	
<div class="col-lg-12">
	<h2>Editar perfil
	<div class="pull-right">
		<button class='btn btn-success' style="white-space: normal" type='button' data-toggle="modal" data-target="#confirmDelete" 
					data-title="Atención" 
					data-message='Una vez guardada tu información personal, no podrás volver a editarla.
					Estás seguro que deseas continuar?'>Guardar</button>
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
	<hr></br>

	<div class="row">
		<div class="col-md-4 col-lg-5" >
			<ul type = square>
				<p><li><strong>Email: </strong>{{ $user->email }}</p>
				<p><li><strong>Nombre: </strong>{{ $user->nombre.' '. $user->apellido}}</p>
				<p><li><strong>Cédula: </strong>{{ $user->cedula }}</p>
				<p><li><strong>Dirección: </strong>{{ $user->direccion }}</p>
				<p><li><strong>Teléfono: </strong>{{ $user->telefono }}</p>
				<p><li><strong>Fecha de nacimiento: </strong>{{ $user->fecha_nacimiento }}</p>
				<p><li><strong>Género: </strong>{{ $user->genero }}</p><br>         
			</ul>			
		</div>
		<div class="col-md-4 col-lg-5" >
			<div class="alert alert-success">
				{{'Por favor completa la siguiente información'}}					
			</div>
			<ul type = square>
				<p><li><strong>Con quien vives?: </strong><select name="personas_hogar" id="personas_hogar">
					<option value="">--Seleccione--</option>
					<option <?php if(Input::old('personas_hogar')=='Padres/Abuelos') { echo 'selected'; }?> >Padres/Abuelos</option>
					<option <?php if(Input::old('personas_hogar')=='Pareja') { echo 'selected'; }?> >Pareja</option>
					<option <?php if(Input::old('personas_hogar')=='Sólo/a') { echo 'selected'; }?> >Sólo/a</option>
					<option <?php if(Input::old('personas_hogar')=='Otros') { echo 'selected'; }?> >Otros</option>
				</select>
			</ul>
		</div>		
	</div>
</div>
{{ Form::close() }}			
	
@include('layouts.confirm')
@stop