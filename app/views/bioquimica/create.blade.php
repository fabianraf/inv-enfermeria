@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-8">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Ingresar datos de pruebas bioquímicas</h1>
    <hr>
    	{{ Form::open(array('url' => 'bioquimica.ingresar')) }}
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
					<h4><i><u>Biometría hemática</u></i></h4>
					
					<table class="table table-bordered col-lg-12">
						<tr>
							<td>		
								<strong>WBC (K/uL):</strong>														
							</td>
							<td align='left'>
								{{Form::text('wbc', Input::old('wbc'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Neutrofilos (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('neutrofilos', Input::old('neutrofilos'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Linfocitos (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('linfocitos', Input::old('linfocitos'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Monocitos (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('monocitos', Input::old('monocitos'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Eosinofilos (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('eosinofilos', Input::old('eosinofilos'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Basofilos (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('basofilos', Input::old('basofilos'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Linfocitos atípicos (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('linfocitos_atipicos', Input::old('linfocitos_atipicos'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Células grandes inmaduras (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('celulas_grandes_inmaduras', Input::old('celulas_grandes_inmaduras'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>RBC (M/uL):</strong>														
							</td>
							<td align='left'>
								{{Form::text('rbc', Input::old('rbc'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>HGB (g/dL):</strong>														
							</td>
							<td align='left'>
								{{Form::text('hgb', Input::old('hgb'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>HCT (%):</strong>														
							</td>
							<td align='left'>
								{{Form::text('hct', Input::old('hct'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>RDW (%)</strong>														
							</td>
							<td align='left'>
								{{Form::text('rdw', Input::old('rdw'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>PLT (K/uL):</strong>														
							</td>
							<td align='left'>
								{{Form::text('plt', Input::old('plt'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>MCH (pg):</strong>														
							</td>
							<td align='left'>
								{{Form::text('mch', Input::old('mch'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>MCHC (g/dL):</strong>														
							</td>
							<td align='left'>
								{{Form::text('mchc', Input::old('mchc'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>MCV:</strong>														
							</td>
							<td align='left'>
								{{Form::text('mcv', Input::old('mcv'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Colesterol:</strong>														
							</td>
							<td align='left'>
								{{Form::text('colesterol', Input::old('colesterol'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>HDL Colesterol:</strong>														
							</td>
							<td align='left'>
								{{Form::text('hdl_colesterol', Input::old('hdl_colesterol'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Triglicéridos:</strong>														
							</td>
							<td align='left'>
								{{Form::text('trigliceridos', Input::old('trigliceridos'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Glucosa ayunas:</strong>														
							</td>
							<td align='left'>
								{{Form::text('glucosa_ayunas', Input::old('glucosa_ayunas'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>LDL Colesterol:</strong>														
							</td>
							<td align='left'>
								{{Form::text('ldl_colesterol', Input::old('ldl_colesterol'), array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>HBSAG:</strong>														
							</td>
							<td align='left'>
								{{Form::text('hbsag', Input::old('hbsag'), array('class'=>'form-control'))}}	
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
	
	