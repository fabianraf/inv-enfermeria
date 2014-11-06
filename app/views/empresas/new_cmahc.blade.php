@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => '/encuesta_control_higiene_personal/crear_empresa')) }}

<div class="col-lg-12">
	<h2>Control de manipulación de alimentos e higiene de los comedores de la PUCE
		<div class="pull-right">
			<input type="submit" value="SIGUIENTE" class="btn btn-success">			
		</div>
	</h2>
	@if(isset($message))
	    <div class="alert alert-success">
	        <a href="#" class="close" data-dismiss="alert">&times;</a>
					{{$message}}
	    </div>
	@endif
	@if (Session::get('mensaje'))
		@foreach($errors->all() as $error)
			<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert'>&times;</a>{{ $error }}</a></div>
		@endforeach
		
	@endif

	<hr>



	<div class="row top30 form-group">
		{{ Form::label('nombre', 'Nombre de la Empresa',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('nombre','', array('class' => 'form-control', 'placeholder' => 'Nombre de la empresa' )); }}
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('propietario', 'Nombre del Propietario',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('propietario','', array('class' => 'form-control', 'placeholder' => 'Nombre del propietario' )); }}
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('relacion_puce', 'Relacion PUCE',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			<select name="relacion_puce">
					<option>--Seleccione--</option>
					<option value="1">Externo</option>
					<option value="2">Interno</option>
				</select>
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('fecha', 'Fecha',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('fecha', '', array('class' => 'form-control','placeholder' => 'Fecha','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}
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
	</div>

	<div class="row top10 form-group">
		{{ Form::label('recomendaciones', 'Recomendaciones',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::textarea('recomendaciones','', array('class' => 'form-control', 'placeholder' => 'Recomendaciones' )); }}
		</div>
	</div>
	
</div>
	</div>
	<div class="col-lg-12">
	</div>
	</br></br>
	{{ Form::hidden('codigo_empresa', Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')) }}
</div>
{{ Form::close() }}
@stop