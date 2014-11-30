@extends('layouts.default')
	
@section('content')

	{{ Form::open(array('url' => '/encuesta_control_higiene_personal/crear_encuesta', 'id' => 'crear_encuesta_control_higiene_personal')) }}
	<div class="col-lg-12">
	<h2>{{ $empresa->nombre }}
		<div class="pull-right">
			<a href="/encuesta_control_higiene_personal/empresas"><input type="button" value="VOLVER A EMPRESAS" class="btn btn-warning"></a>
			<a href="/encuesta_control_higiene_personal/nueva_encuesta?empresa_id={{$empresa->id}}"><input type="button" value="AÑADIR NUEVO EMPLEADO" class="btn btn-primary"></a>
			<input type="submit" value="GRABAR" class="btn btn-success" id="grabar-encuesta">
		</div>
	</h2>
	<div id="errores"></div>
	<hr>

	
	
	<div class="row top30 form-group">
		{{ Form::label('nombre', 'Nombre',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('empleado[nombre]', $empleado->nombre, array('class' => 'form-control', 'placeholder' => 'Nombre del empleado' )); }}
		</div>
	</div>
	<div class="row top30 form-group">
		{{ Form::label('cargo', 'Cargo',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('empleado[cargo]',$empleado->cargo, array('class' => 'form-control', 'placeholder' => 'Cargo' )); }}
		</div>
		{{ Form::hidden('empleado[empresa_id]', $empresa->id, array("id" => "empresa_id")) }}
		{{ Form::hidden('etiquetas_count', $etiquetas->count()) }}
		@if(isset($empleado->id))
			{{ Form::hidden('empleado_id', $empleado->id) }}
		@endif
	</div>

	</div>
	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12"> 
			<tr>												
				<th>					
				</th>				
				<th colspan="3">
					Cumple
				</th>
				
			</tr>		
		  	<tr>	
		  		<td></td>
		  		<td>Si</td>	    	
		  		<td>No</td>
		    	<td>No Aplica</td>		    
		  	</tr>	
		  	@foreach($etiquetas as $etiqueta)
		  	<?php 
		  		$si_cumple = "";
		  		$no_cumple = "";
		  		$no_aplica = "";
		  		if(isset($empleado->id)){
		  			$empleado_etiqueta = EncuestaControlHigiene::where("etiqueta_id", "=", $etiqueta->id)
																->where("empleado_id", "=", $empleado->id)->get()->first();
		  			if(isset($empleado_etiqueta)){
		  				switch ($empleado_etiqueta->cumple) {
		  					case Config::get('constants.SI_CUMPLE'):
		  						$si_cumple = "checked";
		  						break;
		  					case Config::get('constants.NO_CUMPLE'):
		  						$no_cumple = "checked";
		  						break;
		  					case Config::get('constants.NO_APLICA'):
		  						$no_aplica = "checked";
		  						break;
		  					default:
		  						# code...
		  						break;
		  				}
		  			}
		  		} else{

		  		}
		  	?>
			<tr>
				<td>{{ $etiqueta->titulo }}</td>				
				<td><input {{$si_cumple}} required type="radio" name="encuesta_control_higiene_personal[{{$etiqueta->id}}]" value="{{Config::get('constants.SI_CUMPLE')}}"></td>
				<td><input {{$no_cumple}} type="radio" name="encuesta_control_higiene_personal[{{$etiqueta->id}}]" value="{{Config::get('constants.NO_CUMPLE')}}"></td>
				<td><input {{$no_aplica}} type="radio" name="encuesta_control_higiene_personal[{{$etiqueta->id}}]" value="{{Config::get('constants.NO_APLICA')}}"></td>
			</tr>							
			@endforeach 
			
		</table>
	</div>	
	{{ Form::hidden('encuesta', '2') }}
</div>
{{ Form::close() }}
@stop