@extends('layouts.default')
    
@section('content')

<h1>
  Gestión Antropometrica
  
</h1>
<div class="row estudiantes">
	<h3>Buscar estudiantes</h3>
	{{ Form::open(array('url' => 'antropometria')) }}

	<div class="form-group">    	
        {{Form::text('busqueda', Input::old('busqueda'), array('class'=>'form-control'))}}
        {{Form::submit('Buscar', array('class'=>'btn btn-success'))}}
    </div>    
</div>
<h3>Estudiantes</h3>
<div class="list-group">
<table class="table table-striped" style="width: 900px">
    <tr>
        <th>Cedula</th>
        <th>Nombre Completo</th>
        <th>Fecha de nacimiento</th>
        <th></th>
    </tr> 
	<ul>
  @foreach($estudiantes as $estudiante)
  <tr>
        <td>{{ $estudiante->cedula }}</td>
        <td>{{ $estudiante->nombre.' '.$estudiante->apellido }}</td> 
        <td>{{ $estudiante->fecha_nacimiento }}</td>
        <td><a href="{{{ URL::to('antropometria/datos/'.$estudiante->id) }}}">Datos Antropometricos</a></td>        
    </tr>    
  @endforeach
	</ul>
</table>
</div>
{{ Form::close() }}
@stop



  