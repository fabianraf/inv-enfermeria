@extends('layouts.default')
	
@section('content')

<div class="col-lg-12">
  <div class="pull-right">
			<a href="/encuesta_control_higiene_personal/empresas"><input type="button" value="VOLVER A EMPRESAS" class="btn btn-warning"></a>
			<?php  echo "<td><a href='/encuesta_control_higiene_personal/nueva_encuesta?empresa_id=".$empresa->id."'>"; ?><input type="button" value="AÑADIR NUEVO EMPLEADO" class="btn btn-primary"></a>
	</div>
  <h2>Empleados de la empresa {{ $empresa->nombre}}</h2>
  <br><br>
  @foreach($empresa->empleados as $empleado)
	<div class="row">		
		<div class="col-md-4 col-lg-5" >
			<ul type = square>				
				<p><li><strong>Nombre: </strong>{{ $empleado->nombre}}</p>
				<p><li><strong>Cargo: </strong>{{ $empleado->cargo}}</p>				
			</ul>			
		</div>		
	</div><br>
	@endforeach
</div>

 



@stop