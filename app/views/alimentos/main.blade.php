@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <h2>Gestión de alimentos</h2>
  <hr>
  </br>

  <div class="col-lg-12">
	  	@foreach($tipos_de_alimentos as $key => $tipo_de_alimento)
			<?php 			
						
				if($key == 0)
					$button_class = " btn-info btn-striped";
				else
					$button_class = "btn-success btn-striped";											
			?>
			{{ Form::button($tipo_de_alimento->nombre, array('class'=>'btn btn-default gestion-alimentos ' . $button_class, 'onclick' => 'submit_gestion_alimentos("'.$tipo_de_alimento->id.'")', 'id' => 'boton-tipo-alimento-'.$tipo_de_alimento->id)) }}
		@endforeach
	
	</br></br>


	
	@foreach($tipos_de_alimentos as $key => $tipo_de_alimento)
	<?php 
		if($key == 0)
			$class = "";
		else
			$class = "hidden";
	?>
	<div class="col-lg-12 responsive">
		<table class="table table-no-border col-lg-12 {{ $class }}" id="tipo-alimento-{{ $tipo_de_alimento->id }}">
			<tr>				
				<td></td>
				<td>Alimentos</td>
			</tr>		
		  		<?php  $index = 1; ?>
		 		@foreach($tipo_de_alimento->alimentos as $alimento)				
		  	<tr>
				<td>{{ $index }}</td>
				<td>{{ HTML::linkRoute('alimentos.edit', $alimento->nombre, array($alimento->id) ) }}</td>
											
			</tr>
			<?php  
					$index++; 					
				?>
  		@endforeach
		</table>
	</div>
	@endforeach
</div>	
@stop