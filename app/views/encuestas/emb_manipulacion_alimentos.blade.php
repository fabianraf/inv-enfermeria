@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_manipulacion_bares')) }}
	<div class="pull-right">
			<input type="submit" value="SIGUIENTE" class="btn btn-success">
	</div></br></br></br>

	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12"> 
			<tr>				
				<th rowspan="2">	
					<h3>MANIPULACION DE ALIMENTOS
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
				<td>Alimentos se conservan frescos para servir durante el día</td>
				<td><input type="radio" name="cumple3" value="SI"></td>
				<td><input type="radio" name="cumple3" value="NO"></td>
				<td><input type="checkbox" name="no_se_pudo_observar"></td>
				<td><input type="checkbox" name="no_hay_termometro"></td>
			</tr>				 		
		</table>
	</div>	
	{{ Form::hidden('encuesta', '2') }}
</div>
{{ Form::close() }}
@stop