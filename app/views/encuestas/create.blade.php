@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
	<h2>Encuesta Bares <div class="pull-right"><input type="submit" value="GRABAR" class="btn btn-success"> <input type="button" value="LIMPIAR" class="btn btn-warning"></div></h2>
	<hr>
	<div class="col-lg-3">
	  @foreach($tipos_de_alimentos as $tipo_de_alimento)
			<input type="button" value="{{ $tipo_de_alimento->nombre }}" class="btn btn-default"/> </br></br>
	  @endforeach
	</div>
	<div class="col-lg-9">
		<table class="table table-bordered col-lg-12"> 

			<tr>
				
				<th rowspan="2">
					Alimentos
				</th>
				<th rowspan="2">
					Porciones
				</th>
				<th colspan="4">
					Semanal
				</th>
				<th rowspan="2">
					N. de porciones diarias
				</th>
				<th colspan="1">
					Tiempo de comida
				</th>
			</tr>
		
		  <tr>
		    <td>
		      Diario
		    </td>
		    <td>
		      1 Vez
		    </td>
		    <td>
		      2-4 veces
		    </td>
		    <td>
		      5-6 veces
		    </td>
		    <td>
		      desayuno, ½ mañana, almuerzo, ½ tarde, merienda
		    </td>
		  </tr>
			
			<tr>
				<td>Doritos</td>
				<td>&nbsp;</td>
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
	  
		</table>
	</div>


		



	
	
</div>
@stop