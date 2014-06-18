@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-8">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Editar Datos Antropometricos</h1>
    <hr>
			<div class="col row">
				
			
				<div class="col-md-4 col-lg-8" >
					<table class="table table-bordered col-lg-12">
						<tr>
							<td>		
								<strong>Email:</strong>															
							</td>
							<td align='left'>
								{{ $estudiante->email }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Cedula:</strong>														
							</td>
							<td align='left'>
								{{ $estudiante->cedula }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Peso (kg):</strong>														
							</td>
							<td align='left'>
								{{ $antropometria->peso }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Talla (m):</strong>														
							</td>
							<td align='left'>
								{{ $antropometria->talla }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Indice IMC:</strong>														
							</td>
							<td align='left'>
								{{ $antropometria->imc }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Circunferencia Cintura (cm):</strong>														
							</td>
							<td align='left'>
								{{ $antropometria->circunferencia_cintura }}
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Circunferencia cadera (cm):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->circunferencia_cadera }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Indice cintura-cadera:</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->indice_cintura_cadera }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Circunferencia Media del Brazo – CMB (cm):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->circunferencia_media_brazo }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>CMB (%):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->porcentaje_cmb }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Bicipital (mm):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->pliegue_bicipital }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Tricipital - PT (mm):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->pliegue_tricipital }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Tricipital (%):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->porcentaje_pt }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Subescapular (mm):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->pliegue_subescapular }}								
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Pliegue Suprailíaco (mm):</strong>													
							</td>
							<td align='left'>
								{{ $antropometria->pliegue_suprailiaco }}								
							</td>
						</tr>				
					</table>
					<br>					
					
				</div>

				
		</div>

</div>
	

@stop
	
	