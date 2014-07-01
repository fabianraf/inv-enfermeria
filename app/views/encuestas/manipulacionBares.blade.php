@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_manipulacion_bares')) }}
<div class="col-lg-12">
	<h2>Control de manipulación de alimentos e higiene de los comedores de la PUCE
		<div class="pull-right">
			<input type="submit" value="SIGUIENTE" class="btn btn-success">			
		</div>
	</h2>
	<hr>
	<div class="form-group">
		{{ Form::label('nombreEmpresa', 'Nombre de la Empresa',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('nombreEmpresa','', array('class' => 'form-control', 'placeholder' => 'Nombre de la empresa' )); }}
		</div>
	</div><br><br>
	<div class="form-group">
		{{ Form::label('nombrePropietario', 'Nombre del Propietario',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('nombrePropietario','', array('class' => 'form-control', 'placeholder' => 'Nombre del propietario' )); }}
		</div>
	</div><br>
	<div class="form-group">
		{{ Form::label('fechaEncuesta', 'Fecha',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('fechaEncuesta', '', array('class' => 'form-control','placeholder' => 'Fecha','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}
			<script>
				$(function() {
					$( "#datepicker" ).datepicker();
				});
			</script>
		</div>
	</div><br>	
	<div class="form-group">
		{{ Form::label('recomendaciones', 'Recomendaciones',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::textarea('recomendaciones','', array('class' => 'form-control', 'placeholder' => 'Recomendaciones' )); }}
		</div>
	</div><br><br>
	<div class="col-lg-12">
	  
	</div>
</div>
	</div>
	<div class="col-lg-12">
	</div>
	</br></br>
	{{ Form::hidden('encuesta', '1') }}
</div>
{{ Form::close() }}
@stop