@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => '/encuesta_control_higiene_personal/empresas/'.$empresa->id.'/guardar_empresa')) }}
<div class="col-lg-12">
	<h2>Control de manipulación de alimentos e higiene de los comedores de la PUCE
		<div class="pull-right">
			<a href="/encuesta_manipulacion_comedores/empresas"><input type="button" value="VOLVER A EMPRESAS" class="btn btn-warning"></a>
			<a href="/encuesta_manipulacion_comedores/empresas/{{$empresa->id}}/editar_encuesta"><input type="button" value="EDITAR ENCUESTA" class="btn btn-primary"></a>
			<input type="submit" value="GRABAR" class="btn btn-success">			
		</div>
	</h2>
	@if(isset($message))
	    <div class="alert alert-success">
	        <a href="#" class="close" data-dismiss="alert">&times;</a>
					{{$message}}
	    </div>
	@endif
	@if (Session::get('mensaje'))
		@if (Session::get('mensaje') == "¡Empresa actualizada exitosamente!")
			<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert'>&times;</a>{{ Session::get('mensaje') }}</a></div>
		@endif
		@foreach($errors->all() as $error)
			<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert'>&times;</a>{{ $error }}</a></div>
		@endforeach
		
	@endif

	<hr>


	<div class="row top30 form-group">
		{{ Form::label('nombre', 'Nombre de la Empresa',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('nombre', $empresa->nombre, array('class' => 'form-control', 'placeholder' => 'Nombre de la empresa' )); }}
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('propietario', 'Nombre del Propietario',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('propietario', $empresa->propietario, array('class' => 'form-control', 'placeholder' => 'Nombre del propietario' )); }}
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('relacion_puce', 'Relacion PUCE',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			<select name="relacion_puce">
					<option>--Seleccione--</option>
					<option <?php if($empresa->relacion_puce == 1) echo "selected";?> value="1">Externo</option>
					<option <?php if($empresa->relacion_puce == 2) echo "selected";?> value="2">Interno</option>
				</select>
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('fecha', 'Fecha',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::text('fecha', $empresa->fecha, array('class' => 'form-control','placeholder' => 'Fecha','id' => 'datepicker','data-date-format'=>'yyyy-mm-dd','readonly')) }}
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
			{{ Form::textarea('observaciones', $empresa->observaciones, array('class' => 'form-control', 'placeholder' => 'Observaciones' )); }}
		</div>
	</div>

	<div class="row top10 form-group">
		{{ Form::label('recomendaciones', 'Recomendaciones',array('class' => 'col-sm-2 control-label')); }}
		<div class="col-sm-6">
			{{ Form::textarea('recomendaciones',$empresa->recomendaciones, array('class' => 'form-control', 'placeholder' => 'Recomendaciones' )); }}
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