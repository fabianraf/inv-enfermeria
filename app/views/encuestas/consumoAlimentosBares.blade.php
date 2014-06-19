@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_consumo_alimentos_bares')) }}
<div class="col-lg-12">
	<h2>Frecuencia de Consumo de Alimentos en los bares de la Universidad
		<div class="pull-right">
			<input type="submit" value="GRABAR" class="btn btn-success">
			<input type="button" value="LIMPIAR" class="btn btn-warning">
		</div>
	</h2>
	<hr>
	<div class="col-lg-12">
	  @foreach($tipos_de_alimentos_bares as $key => $tipo_de_alimento)
			<?php 
				if($key == 0)
					$button_class = "btn-info";
				else
					$button_class = "";
			?>
			{{ Form::button($tipo_de_alimento->nombre, array('class'=>'btn btn-default tipo-alimento ' . $button_class, 'onclick' => 'submit_tipo_de_alimento("'.$tipo_de_alimento->id.'")')) }}
			

	  @endforeach
	</div>
	</br>	</br>
	@foreach($tipos_de_alimentos_bares as $key => $tipo_de_alimento)
	<?php 
		if($key == 0)
			$class = "";
		else
			$class = "hidden";
	?>
	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12 {{ $class }}" id="tipo-alimento-{{ $tipo_de_alimento->id }}"> 

			<tr>
				
				<th rowspan="2">
					Alimentos
				</th>
				<th rowspan="2">
					Porciones
				</th>
				<th colspan="6">
					Frecuencia
				</th>
				<th rowspan="2">
					N. de porciones diarias
				</th>
				<th rowspan="2">
					Tiempo de comida
				</th>
			</tr>
		
		  <tr>
		  	<td>
		      Nunca
		    </td>
		    <td>
		      Diario
		    </td>
		    <td>
		      1 vez por semana
		    </td>
		    <td>
		      2-4 veces por semana
		    </td>
		    <td>
		      5-6 veces por semana
		    </td>
		    <td>
		      Cada 15 días
		    </td>
		  </tr>
		 @foreach($tipo_de_alimento->alimentosBares as $alimento)			
		  	<tr>
				<td>{{ $alimento->nombre }}</td>
				<td>&nbsp;</td>
				<td><input type="radio" name="frecuencia[{{ Helper::clean($alimento->nombre) }}]" value="{{ $alimento->id }}"></td>
				<td><input type="radio" name="frecuencia[{{ Helper::clean($alimento->nombre) }}]" value="{{ $alimento->id }}"></td>
				<td><input type="radio" name="frecuencia[{{ Helper::clean($alimento->nombre) }}]" value="{{ $alimento->id }}"></td>
				<td><input type="radio" name="frecuencia[{{ Helper::clean($alimento->nombre) }}]" value="{{ $alimento->id }}"></td>
				<td><input type="radio" name="frecuencia[{{ Helper::clean($alimento->nombre) }}]" value="{{ $alimento->id }}"></td>
				<td><input type="radio" name="frecuencia[{{ Helper::clean($alimento->nombre) }}]" value="{{ $alimento->id }}"></td>
				<td>
					<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
					</select>
				</td>
				
				<td>
					Desayuno <input type="checkbox" name="alimento"><br/>
					½ mañana <input type="checkbox" name="alimento"><br/>
					Almuerzo <input type="checkbox" name="alimento"><br/>
					½ Tarde <input type="checkbox" name="alimento"><br/>
					Merienda <input type="checkbox" name="alimento">
				</td>
			</tr>
		@endforeach	  
		</table>
	</div>
	@endforeach
</div>
{{ Form::close() }}
@stop