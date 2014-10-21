@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => '/encuesta_control_higiene_personal/crear_encuesta', 'id' => 'crear_encuesta_control_higiene_personal')) }}
		
	<div class="col-lg-12">
	<h2>{{ $empresa->nombre }}
		<div class="pull-right">
			<input type="button" value="AÑADIR NUEVO EMPLEADO" class="btn btn-primary">
			<input type="submit" value="FINALIZAR" class="btn btn-success" id="finalizar-encuesta">
		</div>
	</h2>
	<div id="errores"></div>
	<hr>

	
	
	<div class="row top30 form-group">
		{{ Form::label('nombre', 'Nombre',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('empleado[nombre]','', array('class' => 'form-control', 'placeholder' => 'Nombre del empleado' )); }}
		</div>
	</div>
	<div class="row top30 form-group">
		{{ Form::label('cargo', 'Cargo',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('empleado[cargo]','', array('class' => 'form-control', 'placeholder' => 'Cargo' )); }}
		</div>
		{{ Form::hidden('empleado[empresa_id]', $_GET['empresa_id']) }}
		{{ Form::hidden('etiquetas_count', $etiquetas->count()) }}
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
			<tr>
				<td>{{ $etiqueta->titulo }}</td>				
				<td><input type="radio" name="encuesta_control_higiene_personal[{{$etiqueta->id}}]" value="{{Config::get('constants.SI_CUMPLE')}}"></td>
				<td><input type="radio" name="encuesta_control_higiene_personal[{{$etiqueta->id}}]" value="{{Config::get('constants.NO_CUMPLE')}}"></td>
				<td><input type="radio" name="encuesta_control_higiene_personal[{{$etiqueta->id}}]" value="{{Config::get('constants.NO_APLICA')}}"></td>
			</tr>							
			@endforeach 
			
		</table>
	</div>	
	{{ Form::hidden('encuesta', '2') }}
</div>
{{ Form::close() }}
@stop