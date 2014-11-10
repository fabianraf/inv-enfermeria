@extends('layouts.default')
	
@section('content')
{{ Form::open(array('url' => 'bioquimica.ingresar')) }}

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
			<a href="/bioquimica"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
			{{ Form::submit('GUARDAR', array('class'=>'btn btn-success')) }}
		</div><br><br>
	<h2>Ingresar datos de pruebas bioquímicas - {{ $estudiante->nombre.' '. $estudiante->apellido}}		
	</h2>

	<hr></br>
	<?php if(!isset($id)){?>
		<div class="row">	
			<div class="col-sm-6">							
				<table class="table table-no-border col-lg-12">
					<tr>
						<td><li><strong>WBC (K/uL):</strong></td>
						@if(isset($bioquimica))
						{{ Form::hidden('bioquimica_id',$bioquimica->id, array('id' => 'bioquimica_id' )); }}
							<td align='left'>{{Form::text('wbc', $bioquimica->wbc, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('wbc', Input::old('wbc'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Neutrofilos (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('neutrofilos', $bioquimica->neutrofilos, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('neutrofilos', Input::old('neutrofilos'), array('class'=>'form-control'))}}</td>
						@endif						
					</tr>
					<tr>
						<td><li><strong>Linfocitos (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('linfocitos', $bioquimica->linfocitos, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('linfocitos', Input::old('linfocitos'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Monocitos (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('monocitos', $bioquimica->monocitos, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('monocitos', Input::old('monocitos'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Eosinofilos (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('eosinofilos', $bioquimica->eosinofilos, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('eosinofilos', Input::old('eosinofilos'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Basofilos (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('basofilos', $bioquimica->basofilos, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('basofilos', Input::old('basofilos'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Linfocitos atípicos (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('linfocitos_atipicos', $bioquimica->linfocitos_atipicos, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('linfocitos_atipicos', Input::old('linfocitos_atipicos'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Células grandes inmaduras (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('celulas_grandes_inmaduras', $bioquimica->celulas_grandes_inmaduras, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('celulas_grandes_inmaduras', Input::old('celulas_grandes_inmaduras'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>RBC (M/uL):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('rbc', $bioquimica->rbc, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('rbc', Input::old('rbc'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>HGB (g/dL):</strong>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('hgb', $bioquimica->hgb, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('hgb', Input::old('hgb'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>HCT (%):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('hct', $bioquimica->hct, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('hct', Input::old('hct'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					</table>
			</div>
			<div class="col-sm-6">							
				<table class="table table-no-border col-lg-12">
					<tr>
						<td><li><strong>RDW (%)</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('rdw', $bioquimica->rdw, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('rdw', Input::old('rdw'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>				
					<tr>
						<td><li><strong>PLT (K/uL):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('plt', $bioquimica->plt, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('plt', Input::old('plt'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>MCH (pg):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('mch', $bioquimica->mch, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('mch', Input::old('mch'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>MCHC (g/dL):</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('mchc', $bioquimica->mchc, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('mchc', Input::old('mchc'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>MCV:</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('mcv', $bioquimica->mcv, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('mcv', Input::old('mcv'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Colesterol:</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('colesterol', $bioquimica->colesterol, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('colesterol', Input::old('colesterol'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>HDL Colesterol:</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('hdl_colesterol', $bioquimica->hdl_colesterol, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('hdl_colesterol', Input::old('hdl_colesterol'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Triglicéridos:</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('trigliceridos', $bioquimica->trigliceridos, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('trigliceridos', Input::old('trigliceridos'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>Glucosa ayunas:</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('glucosa_ayunas', $bioquimica->glucosa_ayunas, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('glucosa_ayunas', Input::old('glucosa_ayunas'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>LDL Colesterol:</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('ldl_colesterol', $bioquimica->ldl_colesterol, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('ldl_colesterol', Input::old('ldl_colesterol'), array('class'=>'form-control'))}}</td>
						@endif
					</tr>
					<tr>
						<td><li><strong>HBSAG:</strong></td>
						@if(isset($bioquimica))						
							<td align='left'>{{Form::text('hbsag', $bioquimica->hbsag, array('class'=>'form-control'))}}</td>
						@else
							<td align='left'>{{Form::text('hbsag', Input::old('hbsag'), array('class'=>'form-control'))}}</td>
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






	