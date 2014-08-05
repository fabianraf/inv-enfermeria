@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-8">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Ingresar datos antropométricos</h1>
    <hr>
    	{{ Form::open(array('url' => 'antropometria.ingresar')) }}
			<div class="col row">	
				<div class="col-md-4 col-lg-8" >
					<h4><i><u>Datos del estudiante</u></i></h4>
					<p>
						<strong>Email:</strong>
						{{ $estudiante->email }}
					</p>
					<p>
						<strong>Nombre:</strong>
						{{ $estudiante->nombre.' '. $estudiante->apellido}}
					</p>
					<p>
						<strong>Edad:</strong>
						<?php
							$birthday = new DateTime($estudiante->fecha_nacimiento);
							$interval = $birthday->diff(new DateTime);
							echo $interval->y." años";
						?>
					</p><br>
					<h4><i><u>Datos antropométricos</u></i></h4>
					
						<table class="table table-bordered col-lg-12">
						<tr>
							<td>		
								<strong>Peso (kg):</strong>														
							</td>
							<td align='left'>
								{{Form::text('peso', Input::old('peso'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Talla (m):</strong>														
							</td>
							<td align='left'>
								{{Form::text('talla', Input::old('talla'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Circunferencia Cintura (cm):</strong>														
							</td>
							<td align='left'>
								{{Form::text('circunferencia_cintura', Input::old('circunferencia_cintura'), array('class'=>'form-control'))}}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Circunferencia cadera (cm):</strong>													
							</td>
							<td align='left'>
								{{Form::text('circunferencia_cadera', Input::old('circunferencia_cadera'), array('class'=>'form-control'))}}		
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Circunferencia Media del Brazo – CMB (cm):</strong>													
							</td>
							<td align='left'>
								{{Form::text('circunferencia_brazo', Input::old('circunferencia_brazo'), array('class'=>'form-control'))}}			
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Bicipital (mm):</strong>													
							</td>
							<td align='left'>
								{{Form::text('pliegue_bicipital', Input::old('pliegue_bicipital'), array('class'=>'form-control'))}}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Tricipital - PT (mm):</strong>													
							</td>
							<td align='left'>
								{{Form::text('pliegue_tricipital', Input::old('pliegue_tricipital'), array('class'=>'form-control'))}}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Subescapular (mm):</strong>													
							</td>
							<td align='left'>
								{{Form::text('pliegue_subescapular', Input::old('pliegue_subescapular'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Suprailíaco (mm):</strong>													
							</td>
							<td align='left'>
								{{Form::text('pliegue_suprailiaco', Input::old('pliegue_suprailiaco'), array('class'=>'form-control'))}}		
							</td>
						</tr>				
					</table>
					<br>
					{{ Form::hidden('estudiante_id', $estudiante->id) }}
					{{ Form::submit('Guardar', array('class'=>'btn btn-success')) }}</br></br>
				</div>
				{{ Form::close() }}

				
				
		</div>

</div>
	

@stop
	
	