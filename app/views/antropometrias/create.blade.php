@extends('layouts.default')
	
@section('content')
{{ Form::open(array('url' => 'antropometria.ingresar')) }}


 @if($errors->any())
 <div class="alert alert-danger alert-block">
 	<ul>
 		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
 	</ul>
 </div>
 @endif

	
<div class="col-lg-12">
	<h2>Ingresar datos antropométricos - {{ $estudiante->nombre.' '. $estudiante->apellido}}
		<div class="pull-right">
			<button class='btn btn-success' style="white-space: normal" type='button' data-toggle="modal" data-target="#confirmDelete" 
					data-title="Atención" 
					data-message='Una vez guardada la información antropométrica, no podrás editarla.
					Estás seguro que deseas continuar?'>GRABAR</button>
		</div>
	</h2>

	<hr></br>

	<?php if(!isset($id)){?>
	
			<div class="col-sm-6">							
				<table class="table table-no-border col-lg-12">
					<tr>
						<td><li><strong>Peso (kg): </strong></td>
						<td align='left'>{{Form::text('peso', Input::old('peso'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Talla (m):</strong></td>
						<td align='left'>{{Form::text('talla', Input::old('talla'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Circunferencia Cintura (cm):</strong></td>
						<td align='left'>{{Form::text('circunferencia_cintura', Input::old('circunferencia_cintura'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Circunferencia cadera (cm):</strong></td>
						<td align='left'>{{Form::text('circunferencia_cadera', Input::old('circunferencia_cadera'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Circunferencia Media del Brazo – CMB (cm):</strong></td>
						<td align='left'>{{Form::text('circunferencia_media_brazo', Input::old('circunferencia_media_brazo'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Pliegue Bicipital (mm):</strong></td>
						<td align='left'>{{Form::text('pliegue_bicipital', Input::old('pliegue_bicipital'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Pliegue Tricipital - PT (mm):</strong></td>
						<td align='left'>{{Form::text('pliegue_tricipital', Input::old('pliegue_tricipital'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Pliegue Subescapular (mm):</strong></td>
						<td align='left'>{{Form::text('pliegue_subescapular', Input::old('pliegue_subescapular'), array('class'=>'form-control'))}}</td>
					</tr>
					<tr>
						<td><li><strong>Pliegue Suprailíaco (mm):</strong></td>
						<td align='left'>{{Form::text('pliegue_suprailiaco', Input::old('pliegue_suprailiaco'), array('class'=>'form-control'))}}</td>
					</tr>
				</table>
				<br>
				{{ Form::hidden('estudiante_id', $estudiante->id) }}
			</div>
			{{ Form::close() }}
		</div>
		<?php } ?>
</div>
	
@include('layouts.confirm')
@stop
	
	