@extends('layouts.default')
    
@section('content')

{{ Form::open(array('url' => 'bioquimica')) }}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
{{ HTML::script('/js/jquery-clockpicker.js') }}
{{ HTML::style('/css/bootstrap-clockpicker.css') }}
<link rel="stylesheet" href="/resources/demos/style.css">


<div class="col-lg-12">
  <h2>Gestión de pruebas bioquímicas</h2>
  <hr>
  </br>

  <!-- Success-Messages -->
  @if(isset($message))
        <div class="alert alert-danger">           
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
    @if($estudiante->bioquimica)
    <div class="row">
     <div class="col-sm-5">     
        <h4><i><u>Biometría hemática</u></i></h4>
        <ul type = square>
          <p><li><strong>WBC (K/uL): </strong>{{ $bioquimica->wbc }}</p>
          <p><li><strong>Neutrofilos (%): </strong>{{ $bioquimica->neutrofilos }}</p>
          <p><li><strong>Linfocitos (%): </strong>{{ $bioquimica->linfocitos }}</p>
          <p><li><strong>Monocitos (%): </strong>{{ $bioquimica->monocitos }}</p>
          <p><li><strong>Eosinofilos (%): </strong>{{ $bioquimica->eosinofilos }}</p>
          <p><li><strong>Basofilos (%): </strong>{{ $bioquimica->basofilos }}</p>
          <p><li><strong>Linfocitos atípicos (%): </strong>{{ $bioquimica->linfocitos_atipicos }}</p>
          <p><li><strong>Células grandes inmaduras (%): </strong>{{ $bioquimica->celulas_grandes_inmaduras }}</p>
          <p><li><strong>RBC (M/uL): </strong>{{ $bioquimica->rbc }}</p>
          <p><li><strong>HGB (g/dL): </strong>{{ $bioquimica->hgb }}</p>
          <p><li><strong>HCT (%): </strong>{{ $bioquimica->hct }}</p>
          <p><li><strong>RDW (%): </strong>{{ $bioquimica->rdw }}</p>
          <p><li><strong>PLT (K/uL): </strong>{{ $bioquimica->plt }}</p>
          <p><li><strong>MCH (pg): </strong>{{ $bioquimica->mch }}</p>
          <p><li><strong>MCHC (g/dL): </strong>{{ $bioquimica->mchc }}</p>
          <p><li><strong>MCV: </strong>{{ $bioquimica->mcv }}</p>
        </ul>
      </div>
      <div class="col-sm-6"> 
        <h4><i><u>Química</u></i></h4>
        <ul type = square>
          <p><li><strong>Colesterol: </strong>{{ $bioquimica->colesterol }}</p>
          <p><li><strong>HDL Colesterol: </strong>{{ $bioquimica->hdl_colesterol }}</p>
          <p><li><strong>Triglicéridos: </strong>{{ $bioquimica->trigliceridos }}</p>
          <p><li><strong>Glucosa ayunas: </strong>{{ $bioquimica->glucosa_ayunas }}</p>
          <p><li><strong>LDL Colesterol: </strong>{{ $bioquimica->ldl_colesterol }}</p>
        </ul>
        <h4><i><u>Inmunología</u></i></h4>
        <ul type = square>
          <p><li><strong>HBSAG: </strong>{{ $bioquimica->hbsag }}</p>
        </ul>        
        <h4><i><u>Resultados e interpretación</u></i></h4>
        <ul type = square>
          <p><li><strong></strong></p>          
        </ul>
      </div>
    </div>
    @else
      @if(!$estudiante->edito_perfil)
        <br><br><br><br><br><br><br><div class="alert alert-danger">          
          El estudiante no editó su perfil
        </div>
        
      @else
       <br><br><br><br><br><br><br><div class="alert alert-warning">          
          El estudiante no tiene datos bioquímicos<br>
          <a href="{{{ URL::to('bioquimica/datos/'.$estudiante->id) }}}">Ingresar datos</a>
        </div>
        
      @endif     
    @endif
  @endif
</div>
{{ Form::close() }}
@stop 