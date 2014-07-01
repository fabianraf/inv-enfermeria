@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_manipulacion_bares')) }}
	<div class="pull-right">
			<input type="submit" value="SIGUIENTE" class="btn btn-success">
	</div></br></br></br>

	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12"> 
			<tr>				
				<th>	
					<h3>PRODUCTOS ALIMENTICIOS
				</th>				
				<th>
					Lugar adquirido
				</th>
				<th>
					Registro Sanitario					
				</th>
				<th>
					Fecha de caducidad					
				</th>
				<th>
					Sello de control					
				</th>
				<th>
					No aplica					
				</th>
			</tr>
		  	<tr>
				<td>Snacks</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Chocolates</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Galletas</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Helados</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Bebidas azucaradas</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Bebidas calientes</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Bebidas lácteas</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Productos procesados</td>
				<td>{{ Form::text('lugar_adquirido','', array('class' => 'form-control')); }}</td>
				<td>{{ Form::text('registro_sanitario','', array('class' => 'form-control')); }}</td>				
				<td>{{ Form::text('fecha_caducidad', '', array('class' => 'form-control','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}</p>
								<script>
								  $(function() {
								    $( "#datepicker" ).datepicker();
								  });
								 </script>
				</td>
				<td>{{ Form::text('sello_control','', array('class' => 'form-control')); }}</td>				
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>			 		
		</table>
	</div>	
	{{ Form::hidden('encuesta', '3') }}
</div>
{{ Form::close() }}
@stop