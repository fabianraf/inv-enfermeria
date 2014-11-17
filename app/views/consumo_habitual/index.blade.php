@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <h2>Consumo habitual de alimentos </h2>
  <hr>
  </br>

  <div class="col-lg-12">
	  	
		<table class="table table-no-border col-lg-9">
			<tr>				
				<td></td>
				<td>Encuestas</td>
				
			</tr>		
		  		<?php  $index = 1; ?>
		 	@foreach($usuarios_con_encuesta as $usuario)				
		  	<tr>
				<td>{{ $index }}</td>
				<td> {{ HTML::link( 'encuesta_consumo_alimento/'.$usuario->id , $usuario->nombre . ' ' . $usuario->apellido ) }} </td>			
				
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
			<a href="/encuesta_consumo_habitual">
					<button id="nueva-empresa-boton" type="button" class="btn btn-success">Nueva Encuesta</button>
				</a>
		</div>		
	</div>
</div>



@stop