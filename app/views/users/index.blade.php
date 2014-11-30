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
<div class="pull-right">
			<a href="registro"><input type="button" value="NUEVO USUARIO" class="btn btn-primary"></button></a>
</div>
<div class="col-lg-12">
	<br><br><h2>Usuarios del sistema</h2><br>		
	<div class="col-lg-12">
		<table class="table table-no-border ">
			<tr>							
				<td style="text-align:left"><b>Nombres</td>
				<td style="text-align:left"><b>Email</td>
				<td style="text-align:left"><b>Perfil</td>
				<td style="text-align:left"><b>Eliminar</td>
			</tr>		  		
		 	@foreach($users as $usuario)				
		  	<tr>			
				<td style="text-align:left">{{ $usuario->nombre.' '.$usuario->apellido }}</td>
				<td style="text-align:left">{{ $usuario->email }}</td>
				<td style="text-align:left">{{ $usuario->perfilUsuario->nombre }}</td>
				<?php  echo "<td style='text-align:left'><a href='usuarios/delete/".$usuario->id."' data-method='delete'>
				<button type='submit' class='btn btn-danger' id='confirm'><i class='glyphicon glyphicon-remove'></i></button></a></td>";?>				
			</tr>			
  			@endforeach
		</table>
	</div>
</div>
</div>
<?php echo $users->links(); ?>
	
@stop
