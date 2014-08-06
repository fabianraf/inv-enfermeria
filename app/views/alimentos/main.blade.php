@extends('layouts.default')
	
@section('content')

<h1>
  Gestión de alimentos
  
</h1>
<div class="col-lg-9">
	<h2>Tipos de alimento</h2>
	<table class="table">
	  <thead>
			<tr>
				<td>#</td>
				<td>Tipo</td>
				<td><td>				
			</tr>
		</thead>
		</tbody>
			<?php $index = 1; ?> 
		  	@foreach($tipos_de_alimentos as $tipo_de_alimento)
				<tr id="tipo-de-alimento-{{ $index }}">
					<td>{{ $index }}</td>
					<td>{{ HTML::linkRoute('alimentos.show', $tipo_de_alimento->nombre, array($tipo_de_alimento->id) ) }}</td>
					<td><i class='glyphicon glyphicon-tags'></i></td>
				</tr>
				<?php $index++; ?> 
		  	@endforeach
		</tbody>
	</table>
</div>
@stop