@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'alimentos')) }}
<div class="form-group">
	<h4>{{ Form::label('nombre', 'Nuevo alimento',array('class' => 'col-sm-2 control-label')); }}</h4>
	<div class="col-sm-6">
		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control' )); }}
	</div>
</div>

<div class="form-group">
 	<div class="col-sm-offset-2 col-sm-10">
 		<br><button type="submit" class="btn btn-success">Guardar</button>
 	</div>
</div>
{{ Form::hidden('tipo_de_alimento_id', $tipo_de_alimento->id) }}
{{ Form::close() }}

<div class="col-lg-9">
	<h2><td>{{ $tipo_de_alimento->nombre }}</td></h2>
	<table class="table">
	  <thead>
			<tr>
				<td>#</td>
				<td>Alimento</td>	
				<td></td>
			</tr>
		</thead>
		</tbody>
			<?php $index = 1; ?> 
		  	@foreach($alimentos as $alimento)
				<tr id="alimento-{{ $index }}">
					<td>{{ $index }}</td>
					<td>{{ HTML::linkRoute('alimentos.edit', $alimento->nombre, array($alimento->id) ) }}</td>
					<td><i class='glyphicon glyphicon-tags'></i></td>
				</tr>
				<?php $index++; ?> 
		  	@endforeach
		</tbody>
	</table>
</div>
@stop