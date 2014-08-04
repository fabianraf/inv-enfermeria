@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-9">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Información de Pruebas Bioquímicas</h1>    
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
					<h4><i><u>Biometría hemática</u></i></h4>
					<p>
						<strong>WBC (K/uL):</strong>
						{{ $bioquimica->wbc }}
					</p>

					<p>
						<strong>Neutrofilos (%):</strong>
						{{ $bioquimica->neutrofilos }}
					</p>					
					<p>
						<strong>Linfocitos (%):</strong>
						{{ $bioquimica->linfocitos }}
					</p>
					<p>
						<strong>Monocitos (%):</strong>
						{{ $bioquimica->monocitos }}
					</p>					
					<p>
						<strong>Eosinofilos (%):</strong>
						{{ $bioquimica->eosinofilos }}
					</p>					
					<p>
						<strong>Basofilos (%):</strong>	
						{{ $bioquimica->basofilos }}
					</p>
					<p>
						<strong>Linfocitos atípicos (%):</strong>
						{{ $bioquimica->linfocitos_atipicos }}
					</p>					
					<p>
						<strong>Células grandes inmaduras (%):</strong>
						{{ $bioquimica->celulas_grandes_inmaduras }}
					</p>
					<p>
						<strong>RBC (M/uL):</strong>
						{{ $bioquimica->rbc }}
					</p>
					<p>
						<strong>HGB (g/dL):</strong>
						{{ $bioquimica->hgb }}
					</p>
					<p>
						<strong>HCT (%):</strong>
						{{ $bioquimica->hct }}
					</p>
					<p>
						<strong>RDW (%)</strong>
						{{ $bioquimica->rdw }}
					</p>
					<p>
						<strong>PLT (K/uL):</strong>
						{{ $bioquimica->plt }}
					</p>
					<p>
						<strong>MCH (pg):</strong>
						{{ $bioquimica->mch }}
					</p>
					<p>
						<strong>MCHC (g/dL):</strong>
						{{ $bioquimica->mchc }}
					</p>
					<p>
						<strong>MCV:</strong>
						{{ $bioquimica->mcv }}
					</p><br>
					<h4><i><u>Química</u></i></h4>
					<p>
						<strong>Colesterol:</strong>
						{{ $bioquimica->colesterol }}
					</p>
					<p>
						<strong>HDL Colesterol:</strong>
						{{ $bioquimica->hdl_colesterol }}
					</p>
					<p>
						<strong>Triglicéridos:</strong>
						{{ $bioquimica->trigliceridos }}
					</p>
					<p>
						<strong>Glucosa ayunas:</strong>
						{{ $bioquimica->glucosa_ayunas }}
					</p>
					<p>
						<strong>LDL Colesterol:</strong>
						{{ $bioquimica->ldl_colesterol }}
					</p><br>
					<h4><i><u>Inmunología</u></i></h4>
					<p>
						<strong>HBSAG:</strong>
						{{ $bioquimica->hbsag }}
					</p>
					<br>
					<h1>Resultados e interpretación</h1>
						
				</div>				
			</div>
</div>
	

@stop
	
	