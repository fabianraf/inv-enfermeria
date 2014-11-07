@extends('layouts.default')
    
@section('content')

{{ Form::open(array('url' => 'antropometria')) }}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
{{ HTML::script('/js/jquery-clockpicker.js') }}
{{ HTML::style('/css/bootstrap-clockpicker.css') }}
<link rel="stylesheet" href="/resources/demos/style.css">


<div class="col-lg-12">
  <h2>Gestión antropométrica</h2>
  <hr>
  </br>
 
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
        <p><li><strong>Edad: </strong>
          <?php
            $birthday = new DateTime($estudiante->fecha_nacimiento);
            $interval = $birthday->diff(new DateTime);
            echo $interval->y." años";
          ?></p>
      </ul>
    </div>
    @if($estudiante->antropometria=='SI')
     <div class="row">
      <div class="col-sm-5">   
        <h4><i><u>Datos antropométricos</u></i></h4>
        <ul type = square>
          <p><li><strong>Peso (kg): </strong>{{ $antropometria->peso }}</p>
          <p><li><strong>Talla (m): </strong>{{ $antropometria->talla }}</p>
          <p><li><strong>Circunferencia cintura (cm): </strong>{{ $antropometria->circunferencia_cintura }}</p>
          <p><li><strong>Circunferencia cadera (cm): </strong>{{ $antropometria->circunferencia_cadera }}</p>
          <p><li><strong>Circunferencia media del brazo – CMB (cm): </strong>{{ $antropometria->circunferencia_media_brazo }}</p>
          <p><li><strong>Pliegue bicipital (mm): </strong>{{ $antropometria->pliegue_bicipital }}</p>
          <p><li><strong>Pliegue tricipital - PT (mm): </strong>{{ $antropometria->pliegue_tricipital }}</p>
          <p><li><strong>Pliegue subescapular (mm): </strong>{{ $antropometria->pliegue_subescapular }}</p>
          <p><li><strong>Pliegue suprailíaco (mm): </strong>{{ $antropometria->pliegue_suprailiaco }}</p>
        </ul>
      </div>
      <div class="col-sm-6">        
        <h4><i><u>Resultados e interpretación</u></i></h4>
        <ul type = square>
          <p><li><strong>Indice masa corporal (IMC): </strong>{{ $antropometria->imc }} - {{ $antropometria->interpretacion_imc }}</p>
          <p><li><strong>Indice cintura-cadera: </strong>{{ $antropometria->indice_cintura_cadera }} - {{ $antropometria->interpretacion_indice_cintura_cadera }}</p>
          <p><li><strong>Porcentaje circunferencia media del brazo (% CMB): </strong>{{ $antropometria->porcentaje_cmb }} - {{ $antropometria->interpretacion_cmb }}</p>
          <p><li><strong>Porcentaje pliegue tricipital (%): </strong>{{ $antropometria->porcentaje_pt }}</p>
        </ul>
      </div>
    </div>
    @else
      @if($estudiante->edito_perfil!='SI')
        <br><br><br><br><br><br><br><div class="alert alert-danger">
          El estudiante no editó su perfil
        </div>
        
      @else
        <br><br><br><br><br><br><br><div class="alert alert-warning">          
          El estudiante no tiene datos antropométricos<br>
          <a href="{{{ URL::to('antropometria/datos/'.$estudiante->id) }}}">Ingresar datos</a>
        </div>
        
      @endif     
    @endif
  @endif
</div>
{{ Form::close() }}
@stop



  