@extends('layouts.default')

	
@section('content')


<?php 
if ($user->contador_visitas == 1 && Auth::user()->perfiles_usuario_id != "1"){
?>
	<h2>Aqui va el texto  disclaimer</h2>
<?php 
}else{
?>
	<div class="col-lg-12">
		<h2>Datos personales</h2>
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
					<p><li><strong>Género: </strong>{{ $user->genero }}</p>     
					<p><li><strong>Con quien vives?: </strong>{{ $user->personas_hogar }}</p><br>
				</ul>			
			</div>			
		</div>
	</div>
<?php
	}
?>
@stop
	