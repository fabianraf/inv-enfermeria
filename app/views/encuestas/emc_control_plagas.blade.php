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
					<h3>CONTROL DE PLAGAS
				</th>				
				<th colspan="3">
					Frecuencia
				</th>
				<th rowspan="2">
					Fecha última aplicación
				</th>
				<th rowspan="2">
					Fecha a aplicarse
				</th>
				<th colspan="2">
					Cumple
				</th>
				<th rowspan="2">
					No aplica
				</th>
			</tr>		
		  	<tr>
		  		<td>Sem</td>
		    	<td>Men</td>	
		    	<td>Tri</td>		    	
		  		<td>Sí</td>
		    	<td>No</td>		    
		  	</tr>	
		  	<tr>
				<td>Fumigación</td>
				<td><input type="radio" name="frecuencia1" value="Sem"></td>
				<td><input type="radio" name="frecuencia1" value="Men"></td>
				<td><input type="radio" name="frecuencia1" value="Tri"></td>
				<td>{{ Form::text('fecha_ultima_aplicacion', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('fecha_aplicarse', '', array('class' => 'form-control','id' => 'datepicker2','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker2" ).datepicker();
								  });
								 </script>
				</td>
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Desratización</td>
				<td><input type="radio" name="frecuencia2" value="Sem"></td>
				<td><input type="radio" name="frecuencia2" value="Men"></td>
				<td><input type="radio" name="frecuencia2" value="Tri"></td>
				<td>{{ Form::text('fecha_ultima_aplicacion', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('fecha_aplicarse', '', array('class' => 'form-control','id' => 'datepicker2','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker2" ).datepicker();
								  });
								 </script>
				</td>
				<td><input type="radio" name="cumple2" value="SI"></td>
				<td><input type="radio" name="cumple2" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>				 		
		</table>
	</div>	
	{{ Form::hidden('encuesta', '4') }}
</div>
{{ Form::close() }}
@stop