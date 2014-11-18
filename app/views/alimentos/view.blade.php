@extends('layouts.default')
	
@section('content')

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

 {{ Form::open(array('url' => 'alimentos')) }}
<div class="pull-right">
			<a href="/alimentos"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
			{{ Form::submit('GUARDAR', array('class'=>'btn btn-success')) }}
</div>	
<div class="col-lg-12">	
    <h2>Información nutricional - {{ $alimento->nombre }}</h2>
    <hr>    	
			<div class="col row">	
				<div class="col-md-15 col-lg-12" >
					<table class="table table-bordered col-lg-12">						
						<tr>
							<td>		
								<strong>Porciones:</strong>														
							</td>
							<td align='left'>
								{{Form::text('porciones', $alimento->porciones, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Gramos:</strong>														
							</td>
							<td align='left'>
								{{Form::text('gramos', $alimento->gramos, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Humedad:</strong>														
							</td>
							<td align='left'>
								{{Form::text('humedad', $alimento->humedad, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Calorías:</strong>														
							</td>
							<td align='left'>
								{{Form::text('calorias', $alimento->calorias, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Proteínas:</strong>														
							</td>
							<td align='left'>
								{{Form::text('proteinas', $alimento->proteinas, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Hidratos de c:</strong>														
							</td>
							<td align='left'>
								{{Form::text('hidratos_de_c', $alimento->hidratos_de_c, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fibra dietaria:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fibra_dietaria', $alimento->fibra_dietaria, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Lípidos:</strong>														
							</td>
							<td align='left'>
								{{Form::text('lipidos', $alimento->lipidos, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Acidos grasos saturados:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acidos_grasos_saturados', $alimento->acidos_grasos_saturados, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Acidos grasos monoinsat:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acidos_grasos_monoinsat', $alimento->acidos_grasos_monoinsat, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Acidos grasos polinsat:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acidos_grasos_polinsat', $alimento->acidos_grasos_polinsat, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Colesterol:</strong>														
							</td>
							<td align='left'>
								{{Form::text('colesterol', $alimento->colesterol, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>N6:</strong>														
							</td>
							<td align='left'>
								{{Form::text('n6', $alimento->n6, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>N3:</strong>														
							</td>
							<td align='left'>
								{{Form::text('n3', $alimento->n3, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Caroteno:</strong>														
							</td>
							<td align='left'>
								{{Form::text('caroteno', $alimento->caroteno, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Retinol re:</strong>														
							</td>
							<td align='left'>
								{{Form::text('retinol_re', $alimento->retinol_re, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Vitamina A total re:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_a_total_re', $alimento->vit_a_total_re, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina B1:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b1', $alimento->vit_b1, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina B2:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b2', $alimento->vit_b2, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Niacina:</strong>														
							</td>
							<td align='left'>
								{{Form::text('niacina', $alimento->niacina, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Vitamina B6:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b6', $alimento->vit_b6, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina B12:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b12', $alimento->vit_b12, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Folatos:</strong>														
							</td>
							<td align='left'>
								{{Form::text('folatos', $alimento->folatos, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Acido pantogénico:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acido_pantogenico', $alimento->acido_pantogenico, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Vitamina C:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_c', $alimento->vit_c, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina E:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_e', $alimento->vit_e, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Calcio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('calcio', $alimento->calcio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Cobre:</strong>														
							</td>
							<td align='left'>
								{{Form::text('cobre', $alimento->cobre, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Hierro:</strong>														
							</td>
							<td align='left'>
								{{Form::text('hierro', $alimento->hierro, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Magnesio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('magnesio', $alimento->magnesio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fósforo:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fosforo', $alimento->fosforo, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Potasio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('potasio', $alimento->potasio, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Selenio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('selenio', $alimento->selenio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Sodio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('sodio', $alimento->sodio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Zinc:</strong>														
							</td>
							<td align='left'>
								{{Form::text('zinc', $alimento->zinc, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Cenizas:</strong>														
							</td>
							<td align='left'>
								{{Form::text('cenizas', $alimento->cenizas, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Acido fólico:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acido_folico', $alimento->acido_folico, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fracción comestible:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fraccion_comestible', $alimento->fraccion_comestible, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Carbohidratos disponibles:</strong>														
							</td>
							<td align='left'>
								{{Form::text('carbohidratos_disponibles', $alimento->carbohidratos_disponibles, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fibra cruda:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fibra_cruda', $alimento->fibra_cruda, array('class'=>'form-control'))}}	
							</td>
						</tr>

					</table>
					<br>
					{{ Form::hidden('alimento_id', $alimento->id) }}										
				</div>
				<p><li><strong>Foto: </strong>{{ Form::text('foto', $alimento->url_foto, array('size'=>'40'))}}</p>				
				{{ Form::close() }}
			</div>
</div>
	

@stop
	
	