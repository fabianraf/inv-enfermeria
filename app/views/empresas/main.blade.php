@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <h2><i><u>Index</u></i>
  <h2>Encuestas por empresa</h2>
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
			<br><a href="/encuesta_control_higiene_personal/nueva_empresa"><button id="nueva-empresa-boton" type="button" class="btn btn-success">Nueva Empresa</button></a>
		</div>		
	</div>
</div>



@stop