@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <h2>Información de la Empresa</h2>
  <hr>
  </br>  
	<div class="row">
		<div class="col-md-4 col-lg-5" >
			<ul type = square>				
				<p><li><strong>Nombre: </strong>{{ $empresa->nombre}}</p>
				<p><li><strong>Propietario: </strong>{{ $empresa->propietario}}</p>
				<?php if(!is_null($empresa->recomendaciones)){
					echo "<p><li><strong>Recomendaciones: </strong>".$empresa->recomendaciones."</p>";
				} ?>					
				<p><li><strong>Fecha: </strong>{{ $empresa->fecha}}</p>				
				<p><li><strong>Observaciones: </strong>{{ $empresa->observaciones}}</p>
			</ul>			
		</div>			
	</div>
</div>

 



@stop