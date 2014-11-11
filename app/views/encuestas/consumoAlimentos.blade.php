@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_consumo_alimentos', 'id' => 'encuesta_consumo_alimentos_universidad')) }}
<div class="col-lg-12">
	<h2>Consumo de alimentos en Universidad y alrededores
		<div class="pull-right">
			<input type="submit" value="GRABAR" class="btn btn-success">
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
		
		@if(Auth::user()->encuestaAlimentosUniversidad->count() < TipoDeAlimento::get_total_alimentos())
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				Por favor completa todas las etiquetas rojas.
    </div>
		@endif		
		
	  	@foreach($tipos_de_alimentos as $key => $tipo_de_alimento)
			<?php 
			if(Auth::user()->totalDeAlimentosPorTipoEncuestaAlimentosUniversidad($tipo_de_alimento) == "0")
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
	@foreach($tipos_de_alimentos as $key => $tipo_de_alimento)
	<?php 
		if($key == 0)
			$class = "";
		else
			$class = "hidden";
	?>
	<div class="col-lg-12 responsive">
		<table class="table table-bordered col-lg-12 {{ $class }}" id="tipo-alimento-{{ $tipo_de_alimento->id }}"> 

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
		 		@foreach($tipo_de_alimento->alimentos as $alimento)
				<?php  
					$index++; 
					$encuesta_alimentos_universidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", Auth::user()->id)->where("alimento_id", "=", $alimento->id)->first();
				?>
		  	<tr>
				<td>{{ $alimento->nombre }}</td>
				<td><!--<button type="button" class="btn btn-default btn-sm">
  						<span class="glyphicon glyphicon-file"></span>
					</button>--> 
					<?php $link = "/images/".$alimento->url_foto;

					echo "<a href=".$link." target='_blank'><span class='glyphicon glyphicon-picture'></span></a>"; ?>
					

					<input type="hidden" name="frecuencia[alimento][{{ $index }}]" value="{{ $alimento->id }}"></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="1" {{$encuesta_alimentos_universidad['frecuencia'] == 1 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="2" {{$encuesta_alimentos_universidad['frecuencia'] == 2 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="3" {{$encuesta_alimentos_universidad['frecuencia'] == 3 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="4" {{$encuesta_alimentos_universidad['frecuencia'] == 4 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="5" {{$encuesta_alimentos_universidad['frecuencia'] == 5 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="6" {{$encuesta_alimentos_universidad['frecuencia'] == 6 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="7" {{$encuesta_alimentos_universidad['frecuencia'] == 7 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="8" {{$encuesta_alimentos_universidad['frecuencia'] == 8 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="9" {{$encuesta_alimentos_universidad['frecuencia'] == 9 ? 'checked="checked"' : ''}}></td>
				<td><input type="radio" name="frecuencia[{{ $index }}]" value="10" {{$encuesta_alimentos_universidad['frecuencia'] == 10 ? 'checked="checked"' : ''}}></td>
				<td>
					<select name="frecuencia[porciones][{{$index}}]">
							<option value="1" {{$encuesta_alimentos_universidad['num_porciones'] == 1 ? 'selected="selected"' : ''}}>1</option>
							<option value="2" {{$encuesta_alimentos_universidad['num_porciones'] == 2 ? 'selected="selected"' : ''}}>2</option>
							<option value="3" {{$encuesta_alimentos_universidad['num_porciones'] == 3 ? 'selected="selected"' : ''}}>3</option>
							<option value="4" {{$encuesta_alimentos_universidad['num_porciones'] == 4 ? 'selected="selected"' : ''}}>4</option>
							<option value="5" {{$encuesta_alimentos_universidad['num_porciones'] == 5 ? 'selected="selected"' : ''}}>5</option>
							<option value="6" {{$encuesta_alimentos_universidad['num_porciones'] == 6 ? 'selected="selected"' : ''}}>6</option>
							<option value="7" {{$encuesta_alimentos_universidad['num_porciones'] == 7 ? 'selected="selected"' : ''}}>7</option>
							<option value="8" {{$encuesta_alimentos_universidad['num_porciones'] == 8 ? 'selected="selected"' : ''}}>8</option>
							<option value="9" {{$encuesta_alimentos_universidad['num_porciones'] == 9 ? 'selected="selected"' : ''}}>9</option>
							<option value="10" {{$encuesta_alimentos_universidad['num_porciones'] == 10 ? 'selected="selected"' : ''}}>10</option>
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