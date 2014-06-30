@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_consumo_alimentos')) }}
<div class="col-lg-12">
	<h2>MANIPULACION DE ALIMENTOS
		<div class="pull-right">
			<input type="submit" value="SIGUIENTE" class="btn btn-success">
		</div>
	</h2>
	<hr>	
	</br></br>	
	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12"> 
			<tr>				
				<th rowspan="2">					
				</th>				
				<th colspan="2">
					Cumple
				</th>
				<th rowspan="2">
					No se pudo observar					
				</th>
				<th rowspan="2">
					No hay Termómetro
				</th>
			</tr>		
		  	<tr>
		  		<td>Sí</td>
		    	<td>No</td>		    
		  	</tr>	
		  	<tr>
				<td>Lavado de manos con técnica y frecuencia adecuadas</td>
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_se_pudo_observar"></td>
				<td><input type="checkbox" name="no_hay_termometro"></td>
			</tr>
			<tr>
				<td>Lavado y desinfección de legumbres y frutas</td>
				<td><input type="radio" name="cumple2" value="SI"></td>
				<td><input type="radio" name="cumple2" value="NO"></td>
				<td><input type="checkbox" name="no_se_pudo_observar"></td>
				<td><input type="checkbox" name="no_hay_termometro"></td>
			</tr>
			<tr>
				<td>Ensaladas se conservan frescas para servir en las próximas 4 horas</td>
				<td><input type="radio" name="cumple3" value="SI"></td>
				<td><input type="radio" name="cumple3" value="NO"></td>
				<td><input type="checkbox" name="no_se_pudo_observar"></td>
				<td><input type="checkbox" name="no_hay_termometro"></td>
			</tr>
			<tr>
				<td>Alimentos preparados para servir en las próximas 4 horas, conservados a 65ºC</td>
				<td><input type="radio" name="cumple4" value="SI"></td>
				<td><input type="radio" name="cumple4" value="NO"></td>
				<td><input type="checkbox" name="no_se_pudo_observar"></td>
				<td><input type="checkbox" name="no_hay_termometro"></td>
			</tr>
			<tr>
				<td>Cocción de carnes o pescados a más de 90ºC</td>
				<td><input type="radio" name="cumple5" value="SI"></td>
				<td><input type="radio" name="cumple5" value="NO"></td>
				<td><input type="checkbox" name="no_se_pudo_observar"></td>
				<td><input type="checkbox" name="no_hay_termometro"></td>
			</tr>	 		
		</table>
	</div>	
</div>
{{ Form::close() }}
@stop