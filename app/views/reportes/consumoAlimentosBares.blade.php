@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_consumo_alimentos_bares?estudiante_id=' . $user->id, 'id' => 'encuesta_consumo_alimentos_bares')) }}
<input type="hidden" id="tipo_de_alimentos" name="tipo_de_alimentos" value="{{TipoDeAlimentoBares::get_total_alimentos_bares()}}">
<div class="col-lg-12">
	<h2>Frecuencia de consumo de alimentos en los bares de la Universidad</h2>
	<input type="hidden" name="estudiante_id" value="{{$user->id}}" id="estudiante_id">
	<hr>
	<div class="col-lg-12">
		@if(isset($message))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				{{$message}}
    </div>
		@endif
		
		@foreach($tipos_de_alimentos_bares as $key => $tipo_de_alimento)
			<?php
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
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 7) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 6) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 5) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 4) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 3) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 2) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 1) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, 0.5) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, -2) }}%</td>
				<td>{{ EncuestaAlimentosBares::getPromedioEstudiantesPorAlimento($alimento->id, -1) }}%</td>
				<td>
					{{EncuestaAlimentosBares::getPromedioFrecuenciaPorAlimento($alimento->id) }}
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