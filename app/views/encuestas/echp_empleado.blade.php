@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_control_higiene_personal')) }}
	<div class="pull-right">
			<input type="submit" value="AÑADIR NUEVO EMPLEADO" class="btn btn-primary">
			<input type="submit" value="FINALIZAR" class="btn btn-success">
	</div></br></br></br>
	<div class="form-group">
		{{ Form::label('nombre', 'Nombre',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('nombre','', array('class' => 'form-control', 'placeholder' => 'Nombre del empleado' )); }}
		</div>
	</div><br><br>
	<div class="form-group">
		{{ Form::label('cargo', 'Cargo',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('cargo','', array('class' => 'form-control', 'placeholder' => 'Cargo' )); }}
		</div>
	</div><br><br><br>
	<div class="col-lg-12">
		<table class="table table-bordered table-hover col-lg-12"> 
			<tr>												
				<th>					
				</th>				
				<th colspan="2">
					Cumple
				</th>
				<th rowspan="2">
					No aplica
				</th>
			</tr>		
		  	<tr>		    	
		  		<td>Sí</td>
		    	<td>No</td>		    
		  	</tr>	
		  	<tr>
				<td>Usa uniforme completo</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Usa mandil limpio</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Usa gorro</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Usa mascarilla</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Usa guantes</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Usa desinfectante de manos</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Uñas cortas y limpias</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Uñas sin esmalte</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Sin maquillaje</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Pelo recogido</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Sin joyas</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Sin colonia</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Afeitado y sin bigote</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Carné de Salud actualizado</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>Certificado de Vacuna Hepatitis</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>
			<tr>
				<td>A y B</td>				
				<td><input type="radio" name="cumple1" value="SI"></td>
				<td><input type="radio" name="cumple1" value="NO"></td>
				<td><input type="checkbox" name="no_aplica"></td>
			</tr>							 		
		</table>
	</div>	
	{{ Form::hidden('encuesta', '2') }}
</div>
{{ Form::close() }}
@stop