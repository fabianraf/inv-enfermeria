@extends('layouts.default')
	
@section('content')
{{ Form::open(array('url' => 'antropometria.ingresar')) }}

<!-- Success-Messages -->
	@if(isset($message))
		    <div class="alert alert-success">		        
				{{$message}}
		    </div>
		@endif


 @if($errors->any())
 <div class="alert alert-danger alert-block">
 	<ul>
 		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
 	</ul>
 </div>
 @endif

	
<div class="col-lg-12">
	<div class="pull-right">
		<a href="/antropometria"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
		{{ Form::submit('GUARDAR', array('class'=>'btn btn-success')) }}
		</div><br><br>
	<h2>Ingresar datos antropométricos - {{ $estudiante->nombre.' '. $estudiante->apellido}}
		
	</h2>

	<hr></br>

	<?php if(!isset($id)){?>	
			<div class="col-sm-6">							
				<table class="table table-no-border col-lg-12">
					<tr>
						<td><li><strong>Peso (kg): </strong></td>
						@if(isset($antropometria))
						{{ Form::hidden('antropometria_id',$antropometria->id, array('id' => 'antropometria_id' )); }}
							<td align='left'>{{Form::text('peso', $antropometria->peso, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('peso', Input::old('peso'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Talla (m):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('talla', $antropometria->talla, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('talla', Input::old('talla'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Circunferencia Cintura (cm):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('circunferencia_cintura', $antropometria->circunferencia_cintura, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('circunferencia_cintura', Input::old('circunferencia_cintura'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Circunferencia cadera (cm):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('circunferencia_cadera', $antropometria->circunferencia_cadera, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('circunferencia_cadera', Input::old('circunferencia_cadera'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Circunferencia Media del Brazo – CMB (cm):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('circunferencia_media_brazo', $antropometria->circunferencia_media_brazo, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('circunferencia_media_brazo', Input::old('circunferencia_media_brazo'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Pliegue Bicipital (mm):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('pliegue_bicipital', $antropometria->pliegue_bicipital, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('pliegue_bicipital', Input::old('pliegue_bicipital'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Pliegue Tricipital - PT (mm):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('pliegue_tricipital', $antropometria->pliegue_tricipital, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('pliegue_tricipital', Input::old('pliegue_tricipital'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Pliegue Subescapular (mm):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('pliegue_subescapular', $antropometria->pliegue_subescapular, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('pliegue_subescapular', Input::old('pliegue_subescapular'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Pliegue Suprailíaco (mm):</strong></td>
						@if(isset($antropometria))
							<td align='left'>{{Form::text('pliegue_suprailiaco', $antropometria->pliegue_suprailiaco, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('pliegue_suprailiaco', Input::old('pliegue_suprailiaco'), array('class'=>'form-control'))}}</td>
						@endif						
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
	
	