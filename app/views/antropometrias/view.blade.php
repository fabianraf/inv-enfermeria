@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-9">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Información Antropométrica</h1>     
			<div class="col row">		
				<div class="col-md-4 col-lg-9" >
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
					<h4><i><u>Datos Antropométricos</u></i></h4>
					<p>
						<strong>Peso (kg):</strong>
						{{ $antropometria->peso }}
					</p>

					<p>
						<strong>Talla (m):</strong>
						{{ $antropometria->talla }}
					</p>					
					<p>
						<strong>Circunferencia cintura (cm):</strong>
						{{ $antropometria->circunferencia_cintura }}
					</p>

					<p>
						<strong>Circunferencia cadera (cm):</strong>
						{{ $antropometria->circunferencia_cadera }}
					</p>					
					<p>
						<strong>Circunferencia media del brazo – CMB (cm):</strong>
						{{ $antropometria->circunferencia_media_brazo }}
					</p>					
					<p>
						<strong>Pliegue bicipital (mm):</strong>
						{{ $antropometria->pliegue_bicipital }}
					</p>
					<p>
						<strong>Pliegue tricipital - PT (mm):</strong>
						{{ $antropometria->pliegue_tricipital }}
					</p>					
					<p>
						<strong>Pliegue subescapular (mm):</strong>
						{{ $antropometria->pliegue_subescapular }}
					</p>
					<p>
						<strong>Pliegue suprailíaco (mm):</strong>
						{{ $antropometria->pliegue_suprailiaco }}
					</p><br>
					<h1>Resultados e interpretación</h1><br>
						<p>
							<strong>Indice masa corporal (IMC):</strong>
							{{ $antropometria->imc }} - 
							{{ $antropometria->interpretacion_imc }}
						</p>
						<p>
							<strong>Indice cintura-cadera:</strong>
							{{ $antropometria->indice_cintura_cadera }} - 
							{{ $antropometria->interpretacion_indice_cintura_cadera }}
						</p>
						<p>
							<strong>Porcentaje circunferencia media del brazo (% CMB):</strong>
							{{ $antropometria->porcentaje_cmb }} - 
							{{ $antropometria->interpretacion_cmb }}
						</p>
						<p>
							<strong>Porcentaje pliegue tricipital (%):</strong>
							{{ $antropometria->porcentaje_pt }}
						</p>
				</div>				
			</div>
</div>
	

@stop
	
	