@extends('layouts.default')
	
@section('content')

<h1>
  Gestión de alimentos
  
</h1>
<div class="col-lg-12">
	<h2>Tipos de alimento</h2>
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
				<tr id="tipo-de-alimento-{{ $index }}">
					<td>{{ $index }}</td>
					<td>{{ $tipo_de_alimento->nombre }}</td>
					<td>						
						{{ HTML::linkRoute('alimentos.show', "Ver todos", array($tipo_de_alimento->id) ) }}
					</td>
				</tr>
				<?php $index++; ?> 
		  	@endforeach
		</tbody>
	</table>
</div>
@stop