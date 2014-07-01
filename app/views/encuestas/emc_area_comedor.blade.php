@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_manipulacion_comedores')) }}
	<div class="pull-right">
			<input type="submit" value="SIGUIENTE" class="btn btn-success">
	</div></br></br></br>

	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12"> 
			<tr>				
				<th rowspan="2">	
					<h3>AREA DE COMEDOR
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
		  	<tr>
				<td>Iluminación</td>
				<td><input type="radio" name="higiene1" value="Limpio"></td>
				<td><input type="radio" name="higiene1" value="Sucio"></td>
				<td><input type="radio" name="estado1" value="Bueno"></td>
				<td><input type="radio" name="estado1" value="Malo"></td>
				<td><input type="radio" name="adecuado1" value="SI"></td>
				<td><input type="radio" name="adecuado1" value="NO"></td>
				<td><input type="radio" name="funciona1" value="SI"></td>
				<td><input type="radio" name="funciona1" value="NO"></td>
				<td><input type="radio" name="mantenimiento1" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento1" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Manteles</td>
				<td><input type="radio" name="higiene2" value="Limpio"></td>
				<td><input type="radio" name="higiene2" value="Sucio"></td>
				<td><input type="radio" name="estado2" value="Bueno"></td>
				<td><input type="radio" name="estado2" value="Malo"></td>
				<td><input type="radio" name="adecuado2" value="SI"></td>
				<td><input type="radio" name="adecuado2" value="NO"></td>
				<td><input type="radio" name="funciona2" value="SI"></td>
				<td><input type="radio" name="funciona2" value="NO"></td>
				<td><input type="radio" name="mantenimiento2" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento2" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Mesas</td>
				<td><input type="radio" name="higiene3" value="Limpio"></td>
				<td><input type="radio" name="higiene3" value="Sucio"></td>
				<td><input type="radio" name="estado3" value="Bueno"></td>
				<td><input type="radio" name="estado3" value="Malo"></td>
				<td><input type="radio" name="adecuado3" value="SI"></td>
				<td><input type="radio" name="adecuado3" value="NO"></td>
				<td><input type="radio" name="funciona3" value="SI"></td>
				<td><input type="radio" name="funciona3" value="NO"></td>
				<td><input type="radio" name="mantenimiento3" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento3" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Paredes</td>
				<td><input type="radio" name="higiene4" value="Limpio"></td>
				<td><input type="radio" name="higiene4" value="Sucio"></td>
				<td><input type="radio" name="estado4" value="Bueno"></td>
				<td><input type="radio" name="estado4" value="Malo"></td>
				<td><input type="radio" name="adecuado4" value="SI"></td>
				<td><input type="radio" name="adecuado4" value="NO"></td>
				<td><input type="radio" name="funciona4" value="SI"></td>
				<td><input type="radio" name="funciona4" value="NO"></td>
				<td><input type="radio" name="mantenimiento4" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento4" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Piso</td>
				<td><input type="radio" name="higiene5" value="Limpio"></td>
				<td><input type="radio" name="higiene5" value="Sucio"></td>
				<td><input type="radio" name="estado5" value="Bueno"></td>
				<td><input type="radio" name="estado5" value="Malo"></td>
				<td><input type="radio" name="adecuado5" value="SI"></td>
				<td><input type="radio" name="adecuado5" value="NO"></td>
				<td><input type="radio" name="funciona5" value="SI"></td>
				<td><input type="radio" name="funciona5" value="NO"></td>
				<td><input type="radio" name="mantenimiento5" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento5" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Protector de ventanas</td>
				<td><input type="radio" name="higiene6" value="Limpio"></td>
				<td><input type="radio" name="higiene6" value="Sucio"></td>
				<td><input type="radio" name="estado6" value="Bueno"></td>
				<td><input type="radio" name="estado6" value="Malo"></td>
				<td><input type="radio" name="adecuado6" value="SI"></td>
				<td><input type="radio" name="adecuado6" value="NO"></td>
				<td><input type="radio" name="funciona6" value="SI"></td>
				<td><input type="radio" name="funciona6" value="NO"></td>
				<td><input type="radio" name="mantenimiento6" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento6" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Sillas</td>
				<td><input type="radio" name="higiene7" value="Limpio"></td>
				<td><input type="radio" name="higiene7" value="Sucio"></td>
				<td><input type="radio" name="estado7" value="Bueno"></td>
				<td><input type="radio" name="estado7" value="Malo"></td>
				<td><input type="radio" name="adecuado7" value="SI"></td>
				<td><input type="radio" name="adecuado7" value="NO"></td>
				<td><input type="radio" name="funciona7" value="SI"></td>
				<td><input type="radio" name="funciona7" value="NO"></td>
				<td><input type="radio" name="mantenimiento7" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento7" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Ventanas</td>
				<td><input type="radio" name="higiene8" value="Limpio"></td>
				<td><input type="radio" name="higiene8" value="Sucio"></td>
				<td><input type="radio" name="estado8" value="Bueno"></td>
				<td><input type="radio" name="estado8" value="Malo"></td>
				<td><input type="radio" name="adecuado8" value="SI"></td>
				<td><input type="radio" name="adecuado8" value="NO"></td>
				<td><input type="radio" name="funciona8" value="SI"></td>
				<td><input type="radio" name="funciona8" value="NO"></td>
				<td><input type="radio" name="mantenimiento8" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento8" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Ventilación</td>
				<td><input type="radio" name="higiene9" value="Limpio"></td>
				<td><input type="radio" name="higiene9" value="Sucio"></td>
				<td><input type="radio" name="estado9" value="Bueno"></td>
				<td><input type="radio" name="estado9" value="Malo"></td>
				<td><input type="radio" name="adecuado9" value="SI"></td>
				<td><input type="radio" name="adecuado9" value="NO"></td>
				<td><input type="radio" name="funciona9" value="SI"></td>
				<td><input type="radio" name="funciona9" value="NO"></td>
				<td><input type="radio" name="mantenimiento9" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento9" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>							 		
		</table>
	</div>
	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12">
			<tr>
				<th rowspan="2"></th>				
				<th colspan="2">Cumple</th>
			</tr>
			<tr>
				<td>Si</td>
				<td>No</td>
			</tr>
			<tr>
				<td>Ausencia de insectos y roedores</td>				
				<td><input type="radio" name="cumple10" value="SI"></td>
				<td><input type="radio" name="cumple10" value="NO"></td>				
			</tr>
			<tr>
				<td>Tacho de basura con tapa, funda plástica y etiquetado</td>				
				<td><input type="radio" name="cumple11" value="SI"></td>
				<td><input type="radio" name="cumple11" value="NO"></td>				
			</tr>
			<tr>
				<td>Uso de desinfectantes para limpieza de pisos y paredes</td>				
				<td><input type="radio" name="cumple12" value="SI"></td>
				<td><input type="radio" name="cumple12" value="NO"></td>				
			</tr>
			<tr>
				<td>Uso de paños desinfectado para limpieza de mesones y equipos de cocina</td>				
				<td><input type="radio" name="cumple13" value="SI"></td>
				<td><input type="radio" name="cumple13" value="NO"></td>				
			</tr>
		</table>
	</div> 

	{{ Form::hidden('encuesta', '6') }}
</div>
{{ Form::close() }}
@stop