@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_consumo_alimentos_bares?estudiante_id=' . $user->id, 'id' => 'encuesta_consumo_alimentos_bares')) }}
<input type="hidden" id="tipo_de_alimentos" name="tipo_de_alimentos" value="{{TipoDeAlimentoBares::get_total_alimentos_bares()}}">
<div class="col-lg-12">
	<h2>Frecuencia de consumo de alimentos en los bares de la Universidad 
		<div class="pull-right">
			@if($encuestas_completas == 0 ||  Auth::user()->esAdmin() == 1)
				<input type="submit" value="GRABAR" class="btn btn-success" id="grabar-encuesta">
				<img src="/images/ajax-loader.gif" class="ajax_loader"/>
			@endif
			<!-- <input type="button" value="LIMPIAR" class="btn btn-warning"> -->
		</div>
	</h2>
	<input type="hidden" name="estudiante_id" value="{{$user->id}}" id="estudiante_id">
	<hr>
	<div class="col-lg-12">
		@if(isset($message))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				{{$message}}
    </div>
		@endif
		
		@if($encuestas_completas == 0)
		    <div class="alert alert-success">
		        <a href="#" class="close" data-dismiss="alert">&times;</a>
						Por favor completa todas las etiquetas rojas.
		    </div>
		@else
			<div class="alert alert-success" id="encuestas-llenas">
		        <a href="#" class="close" data-dismiss="alert">&times;</a>
						Gracias, has llenado todos los tipos de alimentos!
		    </div>
		@endif		
	
	  	@foreach($tipos_de_alimentos_bares as $key => $tipo_de_alimento)
			<?php 
			if($user->totalDeAlimentosPorTipoEncuestaAlimentosBaresDeLaUniversidad($tipo_de_alimento) == "0")
				$button_class = "btn-danger btn-striped";
			else
				$button_class = "btn-success btn-striped";		
			if($key == 0)
				$button_class = " btn-info btn-striped";				
							
			?>
			{{ Form::button($tipo_de_alimento->nombre, array('class'=>'btn btn-default tipo-alimento ' . $button_class, 'onclick' => 'submit_tipo_de_alimento("'.$tipo_de_alimento->id.'")', 'id' => 'boton-tipo-alimento-'.$tipo_de_alimento->id)) }}
	  	@endforeach
	</div>
	</br></br>
	<?php  $index = 0; ?>
	@foreach($tipos_de_alimentos_bares as $key => $tipo_de_alimento)
	<?php 
		if($key == 0)
			$class = "";
		else
			$class = "hidden";
	?>
	<div class="col-lg-12 responsive">
		<table class="table table-bordered table-hover col-lg-12 {{ $class }}" id="tipo-alimento-{{ $tipo_de_alimento->id }}"> 

			<tr>				
				<th rowspan="2">Alimentos</th>
				<th rowspan="2">Imagen<br> porción</th>
				<th colspan="10">Frecuencia (veces a la semana)</th>
				<th rowspan="2">N. de porciones diarias</th>				
			</tr>		
		 	<tr>
			  	<td>7</td>
			  	<td>6</td>
			  	<td>5</td>
			  	<td>4</td>
			  	<td>3</td>
			  	<td>2</td>
			  	<td>1</td>
			  	<td>Cada 15 días</td>
			  	<td>Nunca</td>
			  	<td>Desconoce</td>	    
		  	</tr>
		 		@foreach($tipo_de_alimento->alimentosBares as $alimento)
		 		<?php  
					$index++; 
					$encuesta_alimentos_bares = EncuestaAlimentosBares::where("usuario_id", "=", $user->id)->where("alimento_bares_id", "=", $alimento->id)->first();
				?>			
		  	<tr>
				<td>{{ $alimento->nombre }}</td>
				<td><?php $link = "/images/".$alimento->url_foto;
					echo "<a href=".$link." target='_blank'><span class='glyphicon glyphicon-picture'></span></a>"; ?>
				<input type="hidden" name="frecuencia[alimento][{{ $index }}]" value="{{ $alimento->id }}"></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="7" {{$encuesta_alimentos_bares['frecuencia'] == 7 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="6" {{$encuesta_alimentos_bares['frecuencia'] == 6 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="5" {{$encuesta_alimentos_bares['frecuencia'] == 5 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="4" {{$encuesta_alimentos_bares['frecuencia'] == 4 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="3" {{$encuesta_alimentos_bares['frecuencia'] == 3 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="2" {{$encuesta_alimentos_bares['frecuencia'] == 2 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="1" {{$encuesta_alimentos_bares['frecuencia'] == 1 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="0.5" {{$encuesta_alimentos_bares['frecuencia'] == 0.5 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="-2" {{$encuesta_alimentos_bares['frecuencia'] == -2 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" {{$bloquear_encuestas}} name="frecuencia[{{ $index }}]" value="-1" {{$encuesta_alimentos_bares['frecuencia'] == -1 ? 'checked="checked"' : ''}}></td>
				<td>
					<select {{$bloquear_encuestas}} name="frecuencia[porciones][{{$index}}]">
							<!--<option value="">--seleccione--</option>-->
							<option value="0.25" {{$encuesta_alimentos_bares['num_porciones'] == 0.25 ? 'selected="selected"' : ''}}>0.25</option>
							<option value="0.5" {{$encuesta_alimentos_bares['num_porciones'] == 0.5 ? 'selected="selected"' : ''}}>0.5</option>
							<option value="1" {{$encuesta_alimentos_bares['num_porciones'] == 1 ? 'selected="selected"' : ''}}>1</option>
							<option value="2" {{$encuesta_alimentos_bares['num_porciones'] == 2 ? 'selected="selected"' : ''}}>2</option>
							<option value="3" {{$encuesta_alimentos_bares['num_porciones'] == 3 ? 'selected="selected"' : ''}}>3</option>
							<option value="4" {{$encuesta_alimentos_bares['num_porciones'] == 4 ? 'selected="selected"' : ''}}>4</option>
							<option value="5" {{$encuesta_alimentos_bares['num_porciones'] == 5 ? 'selected="selected"' : ''}}>5</option>
							<option value="6" {{$encuesta_alimentos_bares['num_porciones'] == 6 ? 'selected="selected"' : ''}}>6</option>
							<option value="7" {{$encuesta_alimentos_bares['num_porciones'] == 7 ? 'selected="selected"' : ''}}>7</option>
							<option value="8" {{$encuesta_alimentos_bares['num_porciones'] == 8 ? 'selected="selected"' : ''}}>8</option>
							<option value="9" {{$encuesta_alimentos_bares['num_porciones'] == 9 ? 'selected="selected"' : ''}}>9</option>
							<option value="10" {{$encuesta_alimentos_bares['num_porciones'] == 10 ? 'selected="selected"' : ''}}>10</option>
					</select>
				</td>			
			</tr>
		@endforeach	  
		</table>
	</div>
	@endforeach
</div>
{{ Form::close() }}
<div id="draft-saved" class="feedback-success">
  <p>Borrador grabado automaticamente!</p>
</div>
@stop