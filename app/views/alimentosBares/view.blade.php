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

 {{ Form::open(array('url' => 'alimentosBares')) }}
<div class="pull-right">
			<a href="/alimentosBares"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
			{{ Form::submit('GUARDAR', array('class'=>'btn btn-success')) }}
</div>	
<div class="col-lg-12">	
    <h2>Información nutricional - {{ $alimento_bares->nombre }}</h2>
    <hr>    	
			<div class="col row">	
				<div class="col-md-15 col-lg-12" >
					<table class="table table-bordered col-lg-12">						
						<tr>
							<td>		
								<strong>Porciones:</strong>														
							</td>
							<td align='left'>
								{{Form::text('porciones', $alimento_bares->porciones, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Gramos:</strong>														
							</td>
							<td align='left'>
								{{Form::text('gramos', $alimento_bares->gramos, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Humedad:</strong>														
							</td>
							<td align='left'>
								{{Form::text('humedad', $alimento_bares->humedad, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Calorías:</strong>														
							</td>
							<td align='left'>
								{{Form::text('calorias', $alimento_bares->calorias, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Proteínas:</strong>														
							</td>
							<td align='left'>
								{{Form::text('proteinas', $alimento_bares->proteinas, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Hidratos de c:</strong>														
							</td>
							<td align='left'>
								{{Form::text('hidratos_de_c', $alimento_bares->hidratos_de_c, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fibra dietaria:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fibra_dietaria', $alimento_bares->fibra_dietaria, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Lípidos:</strong>														
							</td>
							<td align='left'>
								{{Form::text('lipidos', $alimento_bares->lipidos, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Acidos grasos saturados:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acidos_grasos_saturados', $alimento_bares->acidos_grasos_saturados, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Acidos grasos monoinsat:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acidos_grasos_monoinsat', $alimento_bares->acidos_grasos_monoinsat, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Acidos grasos polinsat:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acidos_grasos_polinsat', $alimento_bares->acidos_grasos_polinsat, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Colesterol:</strong>														
							</td>
							<td align='left'>
								{{Form::text('colesterol', $alimento_bares->colesterol, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>N6:</strong>														
							</td>
							<td align='left'>
								{{Form::text('n6', $alimento_bares->n6, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>N3:</strong>														
							</td>
							<td align='left'>
								{{Form::text('n3', $alimento_bares->n3, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Caroteno:</strong>														
							</td>
							<td align='left'>
								{{Form::text('caroteno', $alimento_bares->caroteno, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Retinol re:</strong>														
							</td>
							<td align='left'>
								{{Form::text('retinol_re', $alimento_bares->retinol_re, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Vitamina A total re:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_a_total_re', $alimento_bares->vit_a_total_re, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina B1:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b1', $alimento_bares->vit_b1, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina B2:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b2', $alimento_bares->vit_b2, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Niacina:</strong>														
							</td>
							<td align='left'>
								{{Form::text('niacina', $alimento_bares->niacina, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Vitamina B6:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b6', $alimento_bares->vit_b6, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina B12:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_b12', $alimento_bares->vit_b12, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Folatos:</strong>														
							</td>
							<td align='left'>
								{{Form::text('folatos', $alimento_bares->folatos, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Acido pantogénico:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acido_pantogenico', $alimento_bares->acido_pantogenico, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Vitamina C:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_c', $alimento_bares->vit_c, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Vitamina E:</strong>														
							</td>
							<td align='left'>
								{{Form::text('vit_e', $alimento_bares->vit_e, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Calcio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('calcio', $alimento_bares->calcio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Cobre:</strong>														
							</td>
							<td align='left'>
								{{Form::text('cobre', $alimento_bares->cobre, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Hierro:</strong>														
							</td>
							<td align='left'>
								{{Form::text('hierro', $alimento_bares->hierro, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Magnesio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('magnesio', $alimento_bares->magnesio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fósforo:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fosforo', $alimento_bares->fosforo, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Potasio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('potasio', $alimento_bares->potasio, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Selenio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('selenio', $alimento_bares->selenio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Sodio:</strong>														
							</td>
							<td align='left'>
								{{Form::text('sodio', $alimento_bares->sodio, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Zinc:</strong>														
							</td>
							<td align='left'>
								{{Form::text('zinc', $alimento_bares->zinc, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Cenizas:</strong>														
							</td>
							<td align='left'>
								{{Form::text('cenizas', $alimento_bares->cenizas, array('class'=>'form-control'))}}	
							</td>
						</tr>
						<tr>
							<td>		
								<strong>Acido fólico:</strong>														
							</td>
							<td align='left'>
								{{Form::text('acido_folico', $alimento_bares->acido_folico, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fracción comestible:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fraccion_comestible', $alimento_bares->fraccion_comestible, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Carbohidratos disponibles:</strong>														
							</td>
							<td align='left'>
								{{Form::text('carbohidratos_disponibles', $alimento_bares->carbohidratos_disponibles, array('class'=>'form-control'))}}	
							</td>
							<td>		
								<strong>Fibra cruda:</strong>														
							</td>
							<td align='left'>
								{{Form::text('fibra_cruda', $alimento_bares->fibra_cruda, array('class'=>'form-control'))}}	
							</td>
						</tr>

					</table>
					<br>
					{{ Form::hidden('alimento_bares_id', $alimento_bares->id) }}										
				</div>
				{{ Form::close() }}
			</div>
			<!--<p><li><strong>Foto: </strong>{{ Form::text('foto', $alimento_bares->url_foto, array('size'=>'40'))}}</p>-->
</div>
	

@stop
	
	