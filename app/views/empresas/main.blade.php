@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <?php if($codigo == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')){ ?>
  	<h2>Control de higiene del personal de bares y comedores de la PUCE</h2>
  <?php }elseif($codigo == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC')){ ?>
  	<h2>Control de manipulación de alimentos e higiene de los comedores de la PUCE</h2>
  <?php } elseif($codigo == Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB')){ ?>
  	<h2>Control de manipulación de alimentos e higiene de los bares de la PUCE</h2>
  <?php } ?>


  <hr>

  	@if (Session::get('mensaje'))
		<div class="top10 alert alert-success">{{Session::get('mensaje')}}</div>
	@endif

  <div class="top10 col-lg-12">
	  	
		<table class="table table-no-border table-hover col-lg-9">
			<thead>				
				<th></th>
				<th>Empresas</th>
				<th class="acciones">Acciones</th>
			</thead>		
		  		<?php  $index = 1; ?>
		 	@foreach($empresas as $empresa)				
		 	<?php 
		 		$link = "";
		 		switch ($empresa->codigo_empresa) {
		 			case  Config::get('constants.COD_EMPRESA_ENCUESTA_CHP'):
		 				$link = "/encuesta_control_higiene_personal/empresas/$empresa->id";
		 				break;
		 			case  Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHC'):
		 				$link = "/encuesta_manipulacion_comedores/empresas/$empresa->id";
		 				break;
		 			case  Config::get('constants.COD_EMPRESA_ENCUESTA_CMAHB'):
		 				$link = "/encuesta_manipulacion_bares/empresas/$empresa->id";
		 				break;
		 			default:
		 				//Default
		 				break;
		 		}
		 	?>
		  	<tr>
				<td>{{ $index }}</td>
				<td> {{ HTML::link( $link , $empresa->nombre ) }} </td>			
				<td class="acciones">
					<a title="Editar Empresa" href="{{$link.'/editar'}}"><span aria-hidden="true" class="glyphicon glyphicon-edit"></span></a>
					<a title="Eliminar Empresa" onclick="return confirm('¿Está seguro de querer eliminar ésta empresa y todos sus datos relacionados?');" href="/empresas/{{$empresa->id}}/eliminar" data-method="delete"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
					<?php if($codigo == Config::get('constants.COD_EMPRESA_ENCUESTA_CHP')){ 
						echo "<a title='Ver Empleados' href='/encuesta_control_higiene_personal/ver_empleados/".$empresa->id."'><span class='glyphicon glyphicon-search'></span>";
					} ?>
				</td>
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
				<a href="/encuesta_manipulacion_comedores/nueva_empresa">
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