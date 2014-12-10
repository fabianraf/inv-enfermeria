@extends('layouts.default')
	
@section('content')

@if (Session::get('mensaje'))
		<div class="top10 alert alert-success">{{Session::get('mensaje')}}</div>
	@endif

<div class="col-lg-12">
  <h2>Consumo habitual de alimentos </h2>
  <hr>
  </br>

  <div class="col-lg-12">
	  	
		<table class="table table-no-border table-hover col-lg-9">
			<thead>				
				<th>#</th>
				<th>Nombre Estudiante</th>
				<th class="acciones">Acciones</th>
				<!-- <th>Acciones</th> -->
				
			</thead>		
		  	<?php  $index = 1; ?>
		 	@foreach($usuarios_con_encuesta as $usuario)				
			  	<tr>
					<td>{{ $index }}</td>
					<td> {{$usuario->nombre . ' ' . $usuario->apellido}} </td>			
				<!-- 	<td class="acciones">
						<a href="/encuesta_consumo_habitual?estudiante_id={{$usuario->id}}" title="Editar encuesta"><span aria-hidden="true" class="glyphicon glyphicon-edit"></span></a>
						<a href="" title="Eliminar encuesta"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>
					</td> -->
					<td class="acciones">
						
						<a title="Eliminar consumo habitual" onclick="return confirm('¿Está seguro de querer eliminar éste consumo habitual y todos sus datos relacionados?');" href="/consumo_habitual/{{$usuario->id}}/eliminar" data-method="delete"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>						
				</td>
				</tr>
			<?php  
					$index++; 					
				?>
  			@endforeach  			
		</table>
		<?php echo $usuarios_con_encuesta->links(); ?>
	</div>
</div>

<div class="form-group">	
		<div class="pull-left">
			<a href="/encuesta_consumo_habitual">
					<button id="nueva-empresa-boton" type="button" class="btn btn-success">Nueva Encuesta</button>
				</a>
		</div>		
	</div>
</div>



@stop