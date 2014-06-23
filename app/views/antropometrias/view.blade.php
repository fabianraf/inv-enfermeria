@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-9">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Información Antropométrica</h1>
    <hr>
			<div class="col row">				
			
				<div class="col-md-4 col-lg-9" >
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
					</p>
					<p>
						<strong>Peso (kg):</strong>
						{{ $antropometria->peso }}
					</p>

					<p>
						<strong>Talla (m):</strong>
						{{ $antropometria->talla }}
					</p>
					<p>
						<strong>Indice IMC:</strong>
						{{ $antropometria->imc }}
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
						<strong>Indice cintura-cadera:</strong>
						{{ $antropometria->indice_cintura_cadera }}
					</p>
					<p>
						<strong>Circunferencia media del brazo – CMB (cm):</strong>
						{{ $antropometria->circunferencia_media_brazo }}
					</p>
					<p>
						<strong>CMB (%):</strong>
						{{ $antropometria->porcentaje_cmb }}
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
						<strong>Pliegue tricipital (%):</strong>
						{{ $antropometria->porcentaje_pt }}
					</p>
					<p>
						<strong>Pliegue subescapular (mm):</strong>
						{{ $antropometria->pliegue_subescapular }}
					</p>
					<p>
						<strong>Pliegue suprailíaco (mm):</strong>
						{{ $antropometria->pliegue_suprailiaco }}
					</p>				
				</div>				
			</div>
</div>
	

@stop
	
	