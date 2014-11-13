@extends('layouts.default')
    
@section('content')

{{ Form::open(array('url' => 'antropometria')) }}

{{ HTML::style('css/smoothness-jquery-ui.css') }}


<div class="col-lg-12">

@if(isset($estudiante) && $estudiante->antropometria)
<div class="pull-right">
    <a href="{{{ URL::to('antropometria/datos/'.$estudiante->id) }}}"><input type="button" value="EDITAR INFORMACION" class="btn btn-primary"></button></a>    
</div><br>
@endif

  <h2>Gestión antropométrica</h2>
  <hr>
  </br>

  <!-- Success-Messages -->
  @if(isset($message))
        <div class="alert alert-danger">           
        {{$message}}
        </div>
    @endif

  @if(isset($estudiante) && !$estudiante->antropometria)
    <div class="alert alert-warning">          
      El estudiante no tiene datos antropométricos<br>
      <a href="{{{ URL::to('antropometria/datos/'.$estudiante->id) }}}">Ingresar datos</a>
    </div>
  @endif

  @if($errors->any())
  <div class="alert alert-danger alert-block">
    <ul>
      {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
  </div>
  @endif  
	<div class="row">    
    <div class="col-sm-6">
      {{ Form::text('nombre_alumno','', array('class' => 'form-control', 'placeholder' => 'Buscar estudiante', 'id' => 'nombre_alumno', 'onkeyup' => 'cUpper(this)' )); }}      
      {{ Form::hidden('alumno_id', Input::old('alumno_id'),array('id'=>'alumno_id'))}}
    </div>
    <button type="submit" class="btn btn-success" id="confirm"><i class='glyphicon glyphicon-search'></i></button>        
  </div>    
  </br>
  @if(isset($estudiante))
    <div class="col-md-4 col-lg-9" >
      <h4><i><u>Datos personales</u></i></h4>
      <ul type = square>
        <p><li><strong>Email: </strong>{{ $estudiante->email }}</p>
        <p><li><strong>Nombre: </strong>{{ $estudiante->nombre.' '. $estudiante->apellido}}</p>
        <p><li><strong>Edad: </strong>{{ $estudiante->getEdad()}} años</p>
      </ul>
    </div>
    @if($estudiante->antropometria)
     <div class="row">
      <div class="col-sm-5">   
        <h4><i><u>Datos antropométricos</u></i></h4>
        <ul type = square>
          <p><li><strong>Peso (kg): </strong>{{ $estudiante->antropometria()->first()->peso }}</p>
          <p><li><strong>Talla (m): </strong>{{ $estudiante->antropometria()->first()->talla }}</p>
          <p><li><strong>Circunferencia cintura (cm): </strong>{{ $estudiante->antropometria()->first()->circunferencia_cintura }}</p>
          <p><li><strong>Circunferencia cadera (cm): </strong>{{ $estudiante->antropometria()->first()->circunferencia_cadera }}</p>
          <p><li><strong>Circunferencia media del brazo – CMB (cm): </strong>{{ $estudiante->antropometria()->first()->circunferencia_media_brazo }}</p>
          <p><li><strong>Pliegue bicipital (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_bicipital }}</p>
          <p><li><strong>Pliegue tricipital - PT (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_tricipital }}</p>
          <p><li><strong>Pliegue subescapular (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_subescapular }}</p>
          <p><li><strong>Pliegue suprailíaco (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_suprailiaco }}</p>
        </ul><br>        
      </div>          
      @endif
    @endif
</div>
{{ Form::close() }}
@stop



  