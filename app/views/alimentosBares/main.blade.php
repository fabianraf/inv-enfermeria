@extends('layouts.default')
	
@section('content')

<!-- Success-Messages -->
	@if(isset($message))
		    <div class="alert alert-success">		        
				{{$message}}
		    </div>
		@endif

 @if($errors->any())
 <div class="alert alert-danger alert-block">
   <ul>
     {{ implode('', $errors->all('<li class="error">:message</li>')) }}
   </ul>
 </div>
 @endif

<div class="col-lg-12">
  <h2>Gestión de alimentos en los bares de la Universidad</h2>
  <hr>
  </br>

  	{{ Form::open(array('url' => 'alimentosBares')) }}	
			
	<div class="col-lg-12">	
		<h4>{{ Form::label('nombre', 'Ingresar nuevo alimento',array('class' => 'col-sm-3 control-label')); }}</h4>
		<div class="col-sm-6">
			{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'onkeyup' => 'cUpper(this)' )); }}						
			<button type="submit" class="btn btn-warning pull-right">Guardar</button><br><br>
		</div>
	</div><br><br>
	{{ Form::hidden('tipo_de_alimento_bares_id', $id_inicial, array('id' => 'tipo_de_alimento_bares_id')) }}
	{{ Form::close() }}
</div>
<div class="col-lg-12">
	  	@foreach($tipos_de_alimentos_bares as $key => $tipo_de_alimento_bares)
			<?php 			
						
				if($key == 0)
					$button_class = "btn-info btn-striped";
				else
					$button_class = "btn-success btn-striped";											
			?>
			{{ Form::button($tipo_de_alimento_bares->nombre, array('class'=>'btn btn-default gestion-alimentos-bares ' . $button_class, 'onclick' => 'submit_gestion_alimentos_bares("'.$tipo_de_alimento_bares->id.'")', 'id' => 'boton-tipo-alimento-bares-'.$tipo_de_alimento_bares->id)) }}
		@endforeach
	
	</br></br>


	
	@foreach($tipos_de_alimentos_bares as $key => $tipo_de_alimento_bares)
	<?php 
		if($key == 0)
			$class = "";
		else
			$class = "hidden";
	?>
	<div class="col-lg-8 responsive">
		<table class="table table-no-border col-lg-8 {{ $class }}" id="tipo-alimento-bares-{{ $tipo_de_alimento_bares->id }}">
			<tr>				
				<td style="text-align:left"></td>
				<td style="text-align:left">Alimentos</td>
				<td style="text-align:left">Imagen</td>
				<td style="text-align:left">Eliminar</td>				
			</tr>		
		  		<?php  $index = 1; ?>
		 		@foreach($tipo_de_alimento_bares->alimentosBares as $alimento_bares)				
		  	<tr>
				<td style="text-align:left">{{ $index }}</td>
				<td style="text-align:left">{{ HTML::linkRoute('alimentosBares.edit', $alimento_bares->nombre, array($alimento_bares->id) ) }}</td>
				<td style="text-align:left">
					<?php $link = "/images/".$alimento_bares->url_foto;

					echo "<a href=".$link." target='_blank'><span class='glyphicon glyphicon-picture'></span></a></td>"; ?>
				<?php  echo "<td style='text-align:left'><a href='alimentosBares/delete/".$alimento_bares->id."' data-method='delete'>
				<button type='submit' class='btn btn-danger' id='confirm'><i class='glyphicon glyphicon-remove'></i></button></a></td>";?>				
				
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