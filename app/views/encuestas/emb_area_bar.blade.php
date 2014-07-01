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
					<h3>AREA DE BAR
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
				<td>Asistentes de cocina</td>
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
				<td>Campana extractora de olores</td>
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
				<td>Canastilla escurridora de utensilios</td>
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
				<td>Cocina 1</td>
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
				<td>Cocina 2</td>
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
				<td>Horno</td>
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
				<td>Iluminación</td>
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
				<td>Mesones de trabajo</td>
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
				<td>Microondas</td>
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
			<tr>
				<td>Paredes</td>
				<td><input type="radio" name="higiene10" value="Limpio"></td>
				<td><input type="radio" name="higiene10" value="Sucio"></td>
				<td><input type="radio" name="estado10" value="Bueno"></td>
				<td><input type="radio" name="estado10" value="Malo"></td>
				<td><input type="radio" name="adecuado10" value="SI"></td>
				<td><input type="radio" name="adecuado10" value="NO"></td>
				<td><input type="radio" name="funciona10" value="SI"></td>
				<td><input type="radio" name="funciona10" value="NO"></td>
				<td><input type="radio" name="mantenimiento10" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento10" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Piso</td>
				<td><input type="radio" name="higiene11" value="Limpio"></td>
				<td><input type="radio" name="higiene11" value="Sucio"></td>
				<td><input type="radio" name="estado11" value="Bueno"></td>
				<td><input type="radio" name="estado11" value="Malo"></td>
				<td><input type="radio" name="adecuado11" value="SI"></td>
				<td><input type="radio" name="adecuado11" value="NO"></td>
				<td><input type="radio" name="funciona11" value="SI"></td>
				<td><input type="radio" name="funciona11" value="NO"></td>
				<td><input type="radio" name="mantenimiento11" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento11" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Plancha freidora (eléctrica)</td>
				<td><input type="radio" name="higiene12" value="Limpio"></td>
				<td><input type="radio" name="higiene12" value="Sucio"></td>
				<td><input type="radio" name="estado12" value="Bueno"></td>
				<td><input type="radio" name="estado12" value="Malo"></td>
				<td><input type="radio" name="adecuado12" value="SI"></td>
				<td><input type="radio" name="adecuado12" value="NO"></td>
				<td><input type="radio" name="funciona12" value="SI"></td>
				<td><input type="radio" name="funciona12" value="NO"></td>
				<td><input type="radio" name="mantenimiento12" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento12" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Protector de ventanas</td>
				<td><input type="radio" name="higiene13" value="Limpio"></td>
				<td><input type="radio" name="higiene13" value="Sucio"></td>
				<td><input type="radio" name="estado13" value="Bueno"></td>
				<td><input type="radio" name="estado13" value="Malo"></td>
				<td><input type="radio" name="adecuado13" value="SI"></td>
				<td><input type="radio" name="adecuado13" value="NO"></td>
				<td><input type="radio" name="funciona13" value="SI"></td>
				<td><input type="radio" name="funciona13" value="NO"></td>
				<td><input type="radio" name="mantenimiento13" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento13" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Purificador de agua</td>
				<td><input type="radio" name="higiene14" value="Limpio"></td>
				<td><input type="radio" name="higiene14" value="Sucio"></td>
				<td><input type="radio" name="estado14" value="Bueno"></td>
				<td><input type="radio" name="estado14" value="Malo"></td>
				<td><input type="radio" name="adecuado14" value="SI"></td>
				<td><input type="radio" name="adecuado14" value="NO"></td>
				<td><input type="radio" name="funciona14" value="SI"></td>
				<td><input type="radio" name="funciona14" value="NO"></td>
				<td><input type="radio" name="mantenimiento14" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento14" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Refrigerador</td>
				<td><input type="radio" name="higiene15" value="Limpio"></td>
				<td><input type="radio" name="higiene15" value="Sucio"></td>
				<td><input type="radio" name="estado15" value="Bueno"></td>
				<td><input type="radio" name="estado15" value="Malo"></td>
				<td><input type="radio" name="adecuado15" value="SI"></td>
				<td><input type="radio" name="adecuado15" value="NO"></td>
				<td><input type="radio" name="funciona15" value="SI"></td>
				<td><input type="radio" name="funciona15" value="NO"></td>
				<td><input type="radio" name="mantenimiento15" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento15" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Selfservice</td>
				<td><input type="radio" name="higiene16" value="Limpio"></td>
				<td><input type="radio" name="higiene16" value="Sucio"></td>
				<td><input type="radio" name="estado16" value="Bueno"></td>
				<td><input type="radio" name="estado16" value="Malo"></td>
				<td><input type="radio" name="adecuado16" value="SI"></td>
				<td><input type="radio" name="adecuado16" value="NO"></td>
				<td><input type="radio" name="funciona16" value="SI"></td>
				<td><input type="radio" name="funciona16" value="NO"></td>
				<td><input type="radio" name="mantenimiento16" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento16" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Tablas plásticas de colores</td>
				<td><input type="radio" name="higiene17" value="Limpio"></td>
				<td><input type="radio" name="higiene17" value="Sucio"></td>
				<td><input type="radio" name="estado17" value="Bueno"></td>
				<td><input type="radio" name="estado17" value="Malo"></td>
				<td><input type="radio" name="adecuado17" value="SI"></td>
				<td><input type="radio" name="adecuado17" value="NO"></td>
				<td><input type="radio" name="funciona17" value="SI"></td>
				<td><input type="radio" name="funciona17" value="NO"></td>
				<td><input type="radio" name="mantenimiento17" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento17" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Tablas plásticas de colores</td>
				<td><input type="radio" name="higiene18" value="Limpio"></td>
				<td><input type="radio" name="higiene18" value="Sucio"></td>
				<td><input type="radio" name="estado18" value="Bueno"></td>
				<td><input type="radio" name="estado18" value="Malo"></td>
				<td><input type="radio" name="adecuado18" value="SI"></td>
				<td><input type="radio" name="adecuado18" value="NO"></td>
				<td><input type="radio" name="funciona18" value="SI"></td>
				<td><input type="radio" name="funciona18" value="NO"></td>
				<td><input type="radio" name="mantenimiento18" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento18" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Utensilios de cocina</td>
				<td><input type="radio" name="higiene19" value="Limpio"></td>
				<td><input type="radio" name="higiene19" value="Sucio"></td>
				<td><input type="radio" name="estado19" value="Bueno"></td>
				<td><input type="radio" name="estado19" value="Malo"></td>
				<td><input type="radio" name="adecuado19" value="SI"></td>
				<td><input type="radio" name="adecuado19" value="NO"></td>
				<td><input type="radio" name="funciona19" value="SI"></td>
				<td><input type="radio" name="funciona19" value="NO"></td>
				<td><input type="radio" name="mantenimiento19" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento19" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Ventanas</td>
				<td><input type="radio" name="higiene20" value="Limpio"></td>
				<td><input type="radio" name="higiene20" value="Sucio"></td>
				<td><input type="radio" name="estado20" value="Bueno"></td>
				<td><input type="radio" name="estado20" value="Malo"></td>
				<td><input type="radio" name="adecuado20" value="SI"></td>
				<td><input type="radio" name="adecuado20" value="NO"></td>
				<td><input type="radio" name="funciona20" value="SI"></td>
				<td><input type="radio" name="funciona20" value="NO"></td>
				<td><input type="radio" name="mantenimiento20" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento20" value="Necesita"></td>				
				<td><input type="checkbox" name="no_existe"></td>
			</tr>
			<tr>
				<td>Ventilación</td>
				<td><input type="radio" name="higiene21" value="Limpio"></td>
				<td><input type="radio" name="higiene21" value="Sucio"></td>
				<td><input type="radio" name="estado21" value="Bueno"></td>
				<td><input type="radio" name="estado21" value="Malo"></td>
				<td><input type="radio" name="adecuado21" value="SI"></td>
				<td><input type="radio" name="adecuado21" value="NO"></td>
				<td><input type="radio" name="funciona21" value="SI"></td>
				<td><input type="radio" name="funciona21" value="NO"></td>
				<td><input type="radio" name="mantenimiento21" value="Esta en"></td>
				<td><input type="radio" name="mantenimiento21" value="Necesita"></td>				
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
				<td><input type="radio" name="cumple22" value="SI"></td>
				<td><input type="radio" name="cumple22" value="NO"></td>				
			</tr>
			<tr>
				<td>Extintor de fuego con carga no caducada</td>				
				<td><input type="radio" name="cumple23" value="SI"></td>
				<td><input type="radio" name="cumple23" value="NO"></td>				
			</tr>
			<tr>
				<td>Tacho de basura con tapa, funda plástica y etiquetado</td>				
				<td><input type="radio" name="cumple24" value="SI"></td>
				<td><input type="radio" name="cumple24" value="NO"></td>				
			</tr>
			<tr>
				<td>Tanque de gas fuera del área de cocina</td>				
				<td><input type="radio" name="cumple25" value="SI"></td>
				<td><input type="radio" name="cumple25" value="NO"></td>				
			</tr>
			<tr>
				<td>Uso de desinfectantes para limpieza de pisos y paredes</td>				
				<td><input type="radio" name="cumple26" value="SI"></td>
				<td><input type="radio" name="cumple26" value="NO"></td>				
			</tr>
			<tr>
				<td>Uso de paños desinfectado para limpieza de mesones y equipos de cocina</td>				
				<td><input type="radio" name="cumple27" value="SI"></td>
				<td><input type="radio" name="cumple27" value="NO"></td>				
			</tr>
		</table>
	</div> 

	{{ Form::hidden('encuesta', '5') }}
</div>
{{ Form::close() }}
@stop