@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <h2>Control de higiene del personal de bares y comedores de la PUCE</h2>
  <hr>
  </br>

  <div class="col-lg-12">
	  	
		<table class="table table-no-border col-lg-9">
			<tr>				
				<td></td>
				<td>Empresas</td>				
			</tr>		
		  		<?php  $index = 1; ?>
		 	@foreach($empresas as $empresa)				
		  	<tr>
				<td>{{ $index }}</td>
				<td> {{ HTML::link( 'encuesta_control_higiene_personal/datos/'.$empresa->id , $empresa->nombre ) }} </td>			
			</tr>
			<?php  
					$index++; 					
				?>
  			@endforeach  			
		</table>
	</div>
</div>

<div class="form-group">	
		<div class="pull-left">
			<br>
			<?php if($codigo == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')){ ?>
				<a href="/encuesta_control_higiene_personal/nueva_empresa">
					<button id="nueva-empresa-boton" type="button" class="btn btn-success">Nueva Empresa</button>
				</a>
			<?php }elseif($codigo == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')){ ?>
				<a href="/encuesta_manipulacion_comedores/nueva_encuesta">
					<button id="nueva-empresa-boton" type="button" class="btn btn-success">Nueva Empresa</button>
				</a>

			<?php } elseif($codigo == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB')){ ?>
				<a href="/encuesta_manipulacion_bares/nueva_empresa">
					<button id="nueva-empresa-boton" type="button" class="btn btn-success">Nueva Empresa</button>
				</a>
			<?php } ?>
		</div>		
	</div>
</div>



@stop