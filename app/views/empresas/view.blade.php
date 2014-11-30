@extends('layouts.default')
	
@section('content')
<div class="col-lg-12">
  <h2>Información de la Empresa
  	<div class="pull-right">
		<a href="/encuesta_control_higiene_personal/empresas"><input type="button" value="VOLVER A EMPRESAS" class="btn btn-warning"></a>
		<a href="/encuesta_control_higiene_personal/nueva_encuesta?empresa_id={{$empresa->id}}"><input type="button" value="AÑADIR NUEVO EMPLEADO" class="btn btn-primary"></a>
		<a href="/encuesta_control_higiene_personal/empresas/{{$empresa->id}}/editar"><input type="button" value="EDITAR" class="btn btn-success" id="grabar-encuesta"></a>
	</div>
  </h2>
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