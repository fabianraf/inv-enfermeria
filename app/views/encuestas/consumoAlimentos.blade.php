@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_consumo_alimentos')) }}
<div class="col-lg-12">
	<h2>Frecuencia de Consumo de Alimentos en la Universidad y alrededores
		<div class="pull-right">
			<input type="submit" value="GRABAR" class="btn btn-success">
			<input type="button" value="LIMPIAR" class="btn btn-warning">
		</div>
	</h2>
	<hr>
	<div class="col-lg-3">
	  @foreach($tipos_de_alimentos as $tipo_de_alimento)
			<!--<input type="button" value="{{ $tipo_de_alimento->nombre }}" class="btn btn-default"/> </br></br>-->
			{{ $tipo_de_alimento->id }}
			{{ Form::hidden('tipo_alimento_id', $tipo_de_alimento->id) }}
			{{ Form::submit($tipo_de_alimento->nombre, array('class'=>'btn btn-default')) }}</br></br>
	  @endforeach
	</div>
	@if(isset($tipo_de_alimento_id))
	{{$tipo_de_alimento_id}}
	<div class="col-lg-9">
		<table class="table table-bordered col-lg-12"> 

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
		 @foreach($alimentos as $alimento)			
		  	<tr>
				<td>{{ $alimento->nombre }}</td>
				<td>&nbsp;</td>
				<td><input type="radio" name="alimento"></td>
				<td><input type="radio" name="alimento"></td>
				<td><input type="radio" name="alimento"></td>
				<td><input type="radio" name="alimento"></td>
				<td><input type="radio" name="alimento"></td>
				<td><input type="radio" name="alimento"></td>
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
	@endif
</div>
{{ Form::close() }}
@stop