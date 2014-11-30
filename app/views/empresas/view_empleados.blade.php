@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <div class="pull-right">
			<a href="/encuesta_control_higiene_personal/empresas"><input type="button" value="VOLVER A EMPRESAS" class="btn btn-warning"></a>
			<?php  echo "<td><a href='/encuesta_control_higiene_personal/nueva_encuesta?empresa_id=".$empresa->id."'>"; ?>
			<input type="button" value="AÑADIR NUEVO EMPLEADO" class="btn btn-primary"></a>
	</div>
  <h2>Empleados de la empresa {{ $empresa->nombre}}</h2>
  <hr>

  	@if (Session::get('mensaje'))
		<div class="top10 alert alert-success">{{Session::get('mensaje')}}</div>
	@endif
 
  <div class="top10 col-lg-12">
	  	
		<table class="table table-no-border table-hover col-lg-9">
			<thead>
				<th></th>
				<th>Empleado</th>
				<th>Cargo</th>
				<th class="acciones">Acciones</th>
			</thead>		
		  		<?php  $index = 1; ?>
		 	@foreach($empleados as $empleado)				
		 	<tr>
				<td>{{ $index }}</td>
				<td>{{ $empleado->nombre }}</td>
				<td>{{ $empleado->cargo }} </td>			
				<td class="acciones">
					<a title="Editar Empleado" href="/encuesta_control_higiene_personal/empleados/{{$empleado->id}}/editar"><span aria-hidden="true" class="glyphicon glyphicon-edit"></span></a>
					<a title="Eliminar Empleado" onclick="return confirm('¿Está seguro de querer eliminar éste empleado y su encuesta?');" href="/encuesta_control_higiene_personal/empleados/{{$empleado->id}}/eliminar" data-method="delete"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php  
					$index++; 					
				?>
  			@endforeach  			
		</table>
		{{ $empleados->links()}}
	</div>

</div>


@stop