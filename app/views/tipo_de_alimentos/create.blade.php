@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
	<h2>Nuevo Tipo de Alimentos</h2>
	<hr>
	
	{{ Form::open(array('route' => 'tipo_de_alimentos.store', 'class' => "form-horizontal", 'id' => "crear-tipo-de-alimentos")) }}

		
		<div id="messageExplanation" >
			
		</div>
		
		{{ View::make("tipo_de_alimentos/form", array("tipo_de_alimento" => new TipoDeAlimento())) }}
	{{ Form::close() }}
	
	<h2>Tipo de alimentos</h2>
	


	<table class="table">
	  <thead>
			<tr>
				<td>#</td>
				<td>Nombre</td>	
				<td>Acciones</td>
			</tr>
		</thead>
		</tbody>
			<?php $index = 1; ?> 
		  @foreach($tipos_de_alimentos as $tipo_de_alimento)
				{{ View::make("tipo_de_alimentos/tipo_de_alimento", array("tipo_de_alimento" => $tipo_de_alimento, 'index' => $index)) }}     
				<?php $index++; ?> 
		  @endforeach
		</tbody>
	</table>

	
	
</div>
@stop