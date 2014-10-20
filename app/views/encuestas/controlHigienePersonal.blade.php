@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_control_higiene_personal')) }}
@if (Session::get('mensaje'))
		<div class="alert alert-success">{{Session::get('mensaje')}}</div>
	@endif
<div class="col-lg-12">
	<h2>Control de higiene del personal de bares y comedores de la PUCE
		<div class="pull-right">
			<input type="submit" value="SIGUIENTE" class="btn btn-success">			
		</div>
	</h2>
	<hr>



	<div class="row top30 form-group">
		{{ Form::label('nombreEmpresa', 'Nombre de la Empresa',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('nombreEmpresa','', array('class' => 'form-control', 'placeholder' => 'Nombre de la empresa' )); }}
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('nombrePropietario', 'Nombre del Propietario',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('nombrePropietario','', array('class' => 'form-control', 'placeholder' => 'Nombre del propietario' )); }}
		</div>
	</div>
	<div class="row top10 form-group">
		{{ Form::label('fechaEncuesta', 'Fecha',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('fechaEncuesta', '', array('class' => 'form-control','placeholder' => 'Fecha','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}
			<script>
				$(function() {
					$( "#datepicker" ).datepicker();
				});
			</script>
		</div>
	</div>
	<div class="row top10 form-group">
		{{ Form::label('observaciones', 'Observaciones',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::textarea('observaciones','', array('class' => 'form-control', 'placeholder' => 'Observaciones' )); }}
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