@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_manipulacion_comedores')) }}
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
				<td>Borrego</td>
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
				<td>Embutidos</td>
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
				<td>Huevos</td>
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
				<td>Mariscos</td>
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
				<td>Pescado</td>
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
				<td>Pollo y pavo</td>
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
				<td>Res</td>
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
				<td>Vísceras</td>
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
				<td>Crema de leche</td>
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
				<td>Leche</td>
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
				<td>Queso</td>
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
				<td>Yogur</td>
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
				<td>Aceite cocina</td>
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
				<td>Aceite ensalada</td>
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
				<td>Achiote</td>
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
				<td>Mantequilla</td>
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
				<td>Margarina</td>
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
				<td>Mayonesa</td>
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
				<td>Vegetales (todos)</td>
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
				<td>Frutas (todas)</td>
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
				<td>Tubérculos: papa, zanahoria balnca, camote</td>
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
				<td>Granos y Cereales (todos)</td>
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
				<td>Enlatados (todos)</td>
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
				<td>Aliños</td>
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
				<td>Azúcares: blanca, morena, panela, chocolate</td>
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