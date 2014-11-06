@extends('layouts.default')

@section('cabecera')
	{{ HTML::script('/js/emahc.js') }}
@stop

@section('content')

{{ Form::open(array('url' => '/encuesta_manipulacion_comedores/guardar_informacion', 'id' => 'tbd')) }}
<input type="hidden" name="empresa_id" value="{{$empresa->id}}">
<div class="col-lg-12">
	<h2>Control de manipulación de alimentos e higiene de los comedores de la PUCE</br></br>
		{{ $empresa->nombre }}
		<div class="pull-right">
			<input type="submit" value="GRABAR" class="btn btn-success">
			<!-- <input type="button" value="GRABAR BORRADOR" class="btn btn-warning"> -->
			<!-- <input type="button" value="LIMPIAR" class="btn btn-warning"> -->
		</div>
	</h2>
	<hr>
	<div class="col-lg-12">
		@if(isset($message))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				{{$message}}
    </div>
		@endif
		
		
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				Por favor completa todas las etiquetas rojas.
    </div>
		
		@foreach($opciones as $key => $opcion)
			<?php 
			if($key == 0)
				$button_class = " btn-info btn-striped";				
			else
				$button_class = "btn-danger btn-striped";					
							
			?>
			{{ Form::button($opcion, array('class'=>'btn btn-default opcion ' . $button_class, 'onclick' => 'submit_emahc("'.$key.'")', 'id' => 'opcion-'.$key)) }}
		@endforeach
	</div>
	</br></br>
	

	<div class="top30 col-lg-12">
		<?php $index = 0; ?>
		@foreach($opciones as $key => $opcion)
			<?php 
				if($key == 0)
					$class = "";
				else
					$class = "hidden";
			?>
			
			<?php if($key == 7){ ?>
				<div id="opcion-div-{{$key}}" class="opcion-div {{ $class }}" >
							<table class="table table-bordered col-lg-12"> 
								<tr>				
									<th rowspan="2">	
										<h3>AREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA
									</th>				
									<th colspan="2">
										Higiene
									</th>
									<th colspan="2">
										Estado
									</th>
									<th colspan="2">
										Adecuado/a
									</th>
									<th colspan="2">
										Funciona
									</th>
									<th colspan="2">
										Mantenimiento
									</th>
									<th rowspan="2">
										No existe				
									</th>
								</tr>		
							  	<tr>
							  		<td>Limpio</td>
							    	<td>Sucio</td>
							    	<td>Bueno</td>
							    	<td>Malo</td>
							    	<td>Si</td>
							    	<td>No</td>
							    	<td>Si</td>
							    	<td>No</td>
							    	<td>Está en</td>
							    	<td>Necesita</td>
							  	</tr>	
							  	@foreach(Etiqueta::getEtiquetasPorPosicion(12)->get() as $etiqueta)
							  		<input type="hidden" name="area_cocina[codigo_area][{{$etiqueta->id}}]" value="{{Config::get('constants.CODIGOS_AREAS.4')}}">
								  	<tr class="fila-encuesta">
										<td>{{ $etiqueta->titulo }}</td>
										<td><input type="radio" name="area_materiales_limpieza[esta_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[esta_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[es_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[es_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[es_adecuado][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[es_adecuado][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[funciona][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[funciona][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input type="radio" name="area_materiales_limpieza[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>				
										<td><input type="checkbox" class="no-aplica" name="area_materiales_limpieza[no_existe][{{ $etiqueta->id }}]" value="1"></td>
									</tr>
									
								@endforeach
							</table>
							
							<table class="table table-bordered col-lg-12">
								<tr>
									<th rowspan="2"></th>				
									<th colspan="2">Cumple</th>
								</tr>
								<tr>
									<td>Si</td>
									<td>No</td>
								</tr>
								@foreach(Etiqueta::getEtiquetasPorPosicion(13)->get() as $etiqueta)
									<input type="hidden" name="area_cocina[codigo_area][{{$etiqueta->id}}]" value="{{Config::get('constants.CODIGOS_AREAS.4')}}">
									<tr class="fila-encuesta">
										<td>{{ $etiqueta->titulo }}</td>				
										<td><input type="radio" name="area_materiales_limpieza[cumple][{{ $etiqueta->id }}]" value="1" required="required"></td>
										<td><input type="radio" name="area_materiales_limpieza[cumple][{{ $etiqueta->id }}]" value="0" required="required"></td>				
									</tr>
									
								@endforeach
							</table>
						</div>

			<?php } ?>
		@endforeach
	</div>	
</div>
{{ Form::close() }}
<div id="draft-saved" class="feedback-success">
  <p>Borrador grabado automaticamente!</p>
</div>
@stop