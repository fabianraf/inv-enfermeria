@extends('layouts.default')

	
@section('content')
{{ Form::open(['route' => 'users.store']) }}
<div class="col-lg-12">
  <h2>Nuevo usuario</h2>
  <hr>
  </br>
<!-- Success-Messages -->
	@if(isset($message))
		    <div class="alert alert-success">		        
				{{$message}}
		    </div>
		@endif

	@if($errors->any())
	<div class="alert alert-danger alert-block">
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	</div>
	@endif

	<div class="row">
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('email', 'Email',array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			{{ Form::text('email','', array('class' => 'form-control' )); }}
			</div>
		</div><br>
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('password', 'Contraseña', array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			{{ Form::password('password', array('class' => 'form-control')); }}
			</div>
		</div><br>
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('password', 'Repita Contraseña', array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			<input type="password" id="password_confirm" class="form-control" name="password_confirm">
			</div>
		</div><br>
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('nombre', 'Nombre',array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			{{ Form::text('nombre','', array('class' => 'form-control' )); }}
			</div>
		</div><br>
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('apellido', 'Apellido',array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			{{ Form::text('apellido','', array('class' => 'form-control' )); }}
			</div>
		</div><br>
		<!--
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('cedula', 'Cédula',array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			{{ Form::text('cedula','', array('class' => 'form-control' )); }}
			</div>
		</div><br>
	-->
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('genero', 'Género',array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			<select name="genero" id="genero">
						<option value="">--Seleccione--</option>
						<option value="M" >Hombre</option>
						<option value="F" >Mujer</option>					
					</select>
			</div>
		</div><br>
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('tipo', 'Perfil',array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-6">
			<select name="tipo" id="tipo">
						<option value="">--Seleccione--</option>
						<option value="admin" >Administrador</option>
						<option value="estudiante" >Estudiante</option>					
					</select>
			</div>
		</div><br><br>
		<!--	
		<div class="form-group">
			<div class="col-sm-10">
			{{ Form::label('fecha_nacimiento', 'Fecha de nacimiento',array('class' => 'col-sm-2 control-label')); }}	
			<div class="col-sm-2">
			{{ Form::text('fecha_nacimiento',Input::old('fecha_nacimiento'), array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
			});
			</script>
			</div>
		</div><br>	-->
	</div>



	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10 pull left">
			<br><button type="submit" class="btn btn-default">Registrar</button>
		</div>
	</div>
</div>
				
{{ Form::close() }}			
	
@stop









						  
						  
						
						

    <!-- /.container -->
		
		<!-- Scripts are placed here -->

		{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
		{{ HTML::script('js/jquery/validate/jquery.validate.min.js') }}
		{{ HTML::script('js/jquery/validate/messages_es.js') }}
		{{ HTML::script('js/jquery/jquery.cookie.js') }}
		{{ HTML::script('js/app.js') }}

