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
        <br>
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
        <th>Datos Antropometricos</th>
    </tr> 
	<ul>
  @if(isset($estudiantes))
  @foreach($estudiantes as $estudiante)
  <tr>
        <td>{{ $estudiante->cedula }}</td>
        <td>{{ $estudiante->nombre.' '.$estudiante->apellido }}</td> 
        <td>{{ $estudiante->fecha_nacimiento }}</td>
        @if($estudiante->antropometria=='SI')
          <td><a href="{{{ URL::to('antropometria/datos/'.$estudiante->id) }}}">Ver</a></td>
        @elseif($estudiante->edito_perfil=='SI')
          <td><a href="{{{ URL::to('antropometria/datos/'.$estudiante->id) }}}">Ingresar</a></td>
        @elseif($estudiante->edito_perfil!='SI')
          <td>No editó su perfil</a></td>  
        @endif
    </tr>    
  @endforeach
  @endif
	</ul>  
</table>
<?php echo $estudiantes->links(); ?>
</div>
{{ Form::close() }}
@stop



  