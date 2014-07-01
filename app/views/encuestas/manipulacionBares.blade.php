@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_manipulacion_comedores')) }}
<div class="col-lg-12">
	<h2>Control de manipulación de alimentos e higiene de los bares de la PUCE
		<div class="pull-right">
			<input type="submit" value="GRABAR" class="btn btn-success">
			<input type="button" value="LIMPIAR" class="btn btn-warning">
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
	</div><br><br>
	<div class="col-lg-12">
	  @foreach($encabezados_preguntas as $key => $encabezado_pregunta)
			<?php 
				if($key == 0)
					$button_class = "btn-info";
				else
					$button_class = "";
			?>
			{{ Form::button($encabezado_pregunta->encabezado, array('class'=>'btn btn-default encabezado-pregunta ' . $button_class, 'onclick' => 'submit_encabezado_pregunta("'.$encabezado_pregunta->id.'")')) }}
		@endforeach
	</div>
</div>
	</div>
	<div class="col-lg-12">
	</div>
	</br></br>
</div>
{{ Form::close() }}
@stop