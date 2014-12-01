@extends('layouts.default')
	
@section('content')
<?php 
	$link = "";
	switch ($empresa->codigo_empresa) {
		case  Config::get('constants.COD_EMPRESA_ENCUESTA_CHP'):
			$link = "/encuesta_control_higiene_personal/empresas";
			break;
		case  Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC'):
			$link = "/encuesta_manipulacion_comedores/empresas";
			break;
		case  Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB'):
			$link = "/encuesta_manipulacion_bares/empresas";
			break;
		default:
			//Default
			break;
	}
?>
<div class="col-lg-12">
  <h2>Información de la Empresa
  	<div class="pull-right">
		<a href="{{ $link }}"><input type="button" value="VOLVER A EMPRESAS" class="btn btn-warning"></a>
		<?php if($empresa->codigo_empresa == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')){ ?> 
			<a href="/encuesta_control_higiene_personal/nueva_encuesta?empresa_id={{$empresa->id}}"><input type="button" value="AÑADIR NUEVO EMPLEADO" class="btn btn-primary"></a>
		<?php } else{ ?>
			<a href="{{ $link }}/{{$empresa->id}}/editar_encuesta"><input type="button" value="EDITAR ENCUESTA" class="btn btn-primary"></a>
		<?php } ?>
		<a href="{{ $link }}/{{$empresa->id}}/editar"><input type="button" value="EDITAR" class="btn btn-success" id="grabar-encuesta"></a>
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