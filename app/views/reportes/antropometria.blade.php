@extends('layouts.default')
    
@section('content')


<h2>Información antropométrica</h2>
<hr>
<div class="table-responsive">  
  </br>
    <table class="table table-no-border table-hover table-with-text-aligned-to-the-left">
      <thead> 
          <th></th>
          <th>Nombres</th>
          <th>Edad</th>
          <th>Género</th>
          <th>Peso</th>
          <th>Talla</th>
          <th>Circunferencia cintura</th>
          <th>Circunferencia cadera</th>
          <th>Circunferencia media del brazo – CMB</th>
          <th>Pliegue bicipital</th>
          <th>Pliegue tricipital</th>
          <th>Pliegue subescapular</th>
          <th>Pliegue suprailíaco</th>
          <th>Indice masa corporal</th>
          <th>Indice cintura-cadera</th>
          <th>Porcentaje CMB</th>
          <th>Porcentaje pliegue tricipital</th>
      </thead>         
        @foreach($users as $usuario)        
        <tr>
          <?php echo "<td style='text-align:left'><a href='/reportes/antropometria/".$usuario->id."'><span class='glyphicon glyphicon-search'></span></td>";?>
          <td>{{ $usuario->nombre.' '.$usuario->apellido }}</td>
          <td>{{ $usuario->getEdad()." años" }}</td>
          <td>{{ $usuario->genero }}</td>
          <td>{{ $usuario->antropometria()->first()->peso }}</td>
          <td>{{ $usuario->antropometria()->first()->talla }}</td>
          <td>{{ $usuario->antropometria()->first()->circunferencia_cintura }}</td>
          <td>{{ $usuario->antropometria()->first()->circunferencia_cadera }}</td>
          <td>{{ $usuario->antropometria()->first()->circunferencia_media_brazo }}</td>
          <td>{{ $usuario->antropometria()->first()->pliegue_bicipital }}</td>
          <td>{{ $usuario->antropometria()->first()->pliegue_tricipital }}</td>
          <td>{{ $usuario->antropometria()->first()->pliegue_subescapular }}</td>
          <td>{{ $usuario->antropometria()->first()->pliegue_suprailiaco }}</td>
          <td>{{ round($usuario->antropometria()->first()->imc,2) }}</td>
          <td>{{ round($usuario->antropometria()->first()->indice_cintura_cadera,2) }}</td>
          <td>{{ round($usuario->antropometria()->first()->porcentaje_cmb,2) }}</td>
          <td>{{ round($usuario->antropometria()->first()->porcentaje_pt,2) }}</td>
      </tr>     
        @endforeach
    </table>
  </div></br></br>
  <div class="row">
    <h4><i><u>Resumen Poblacional:</u></i></h4>
    <div class="col-sm-5">   
      <ul type = square>
        <p><li><strong>Indice masa corporal (IMC)</strong></p>
        <ul type = circle>
          <?php          
          $imcDesnutricionSevera = Antropometrias::where("interpretacion_imc", "=", 'Desnutrición severa')->get()->count();
          $imcDesnutricionModerada = Antropometrias::where("interpretacion_imc", "=", 'Desnutrición moderada')->get()->count();
          $imcDesnutricionLeve = Antropometrias::where("interpretacion_imc", "=", 'Desnutrición leve')->get()->count();
          $imcNormal = Antropometrias::where("interpretacion_imc", "=", 'Normal')->get()->count();
          $imcSobrepeso = Antropometrias::where("interpretacion_imc", "=", 'Sobrepeso')->get()->count();
          $imcObesidadI = Antropometrias::where("interpretacion_imc", "=", 'Obesidad I')->get()->count();
          $imcObesidadII = Antropometrias::where("interpretacion_imc", "=", 'Obesidad II')->get()->count();
          $imcObesidadMorbida = Antropometrias::where("interpretacion_imc", "=", 'Obesidad mórbida')->get()->count();

          $iccMuyBajo = Antropometrias::where("interpretacion_indice_cintura_cadera", "=", 'Muy bajo')->get()->count();
          $imcBajo = Antropometrias::where("interpretacion_indice_cintura_cadera", "=", 'Bajo')->get()->count();
          $imcAlto = Antropometrias::where("interpretacion_indice_cintura_cadera", "=", 'Alto')->get()->count();

          $cmbDesnutricionSevera = Antropometrias::where("interpretacion_cmb", "=", 'Desnutrición severa')->get()->count();
          $cmbDesnutricionModerada = Antropometrias::where("interpretacion_cmb", "=", 'Desnutrición moderada')->get()->count();
          $cmbDesnutricionLeve = Antropometrias::where("interpretacion_cmb", "=", 'Desnutrición leve')->get()->count();
          $cmbNormal = Antropometrias::where("interpretacion_cmb", "=", 'Normal')->get()->count();

          $ptSevera = Antropometrias::where("interpretacion_pliegue_tricipital", "=", 'Déficit de grasa severo')->get()->count();
          $ptModerada = Antropometrias::where("interpretacion_pliegue_tricipital", "=", 'Déficit de grasa moderada')->get()->count();
          $ptLeve = Antropometrias::where("interpretacion_pliegue_tricipital", "=", 'Déficit de grasa leve')->get()->count();
          $ptNormal = Antropometrias::where("interpretacion_pliegue_tricipital", "=", 'Normal')->get()->count();
          $ptExceso = Antropometrias::where("interpretacion_pliegue_tricipital", "=", 'Exceso de grasa')->get()->count();


          $totalAntropometria = Antropometrias::get()->count();
          ?>
          <p><li>Desnutrición severa: {{ round($imcDesnutricionSevera/$totalAntropometria*100,2) }}%</p>
          <p><li>Desnutrición moderada: {{ round($imcDesnutricionModerada/$totalAntropometria*100,2) }}%</p>
          <p><li>Desnutrición leve: {{ round($imcDesnutricionLeve/$totalAntropometria*100,2) }}%</p>
          <p><li>Desnutrición normal: {{ round($imcNormal/$totalAntropometria*100,2) }}%</p>
          <p><li>Desnutrición sobrepeso: {{ round($imcSobrepeso/$totalAntropometria*100,2) }}%</p>
          <p><li>Obesidad I: {{ round($imcObesidadI/$totalAntropometria*100,2) }}%</p>
          <p><li>Obesidad II: {{ round($imcObesidadII/$totalAntropometria*100,2) }}%</p>
          <p><li>Obesidad mórbida: {{ round($imcObesidadMorbida/$totalAntropometria*100,2) }}%</p>
        </ul>
        <p><li><strong>Indice cintura-cadera</strong></p>
        <ul type = circle>
          <p><li>Muy bajo: {{ round($iccMuyBajo/$totalAntropometria*100,2) }}%</p>
          <p><li>Bajo: {{ round($imcBajo/$totalAntropometria*100,2) }}%</p>
          <p><li>Alto: {{ round($imcAlto/$totalAntropometria*100,2) }}%</p>
        </ul>
    </div>
    <div class="col-sm-5">
      <p><li><strong>Porcentaje circunferencia media del brazo (% CMB)</strong></p>
        <ul type = circle>
          <p><li>Desnutrición severa: {{ round($cmbDesnutricionSevera/$totalAntropometria*100,2) }}%</p>
          <p><li>Desnutrición moderada: {{ round($cmbDesnutricionModerada/$totalAntropometria*100,2) }}%</p>
          <p><li>Desnutrición leve: {{ round($cmbDesnutricionLeve/$totalAntropometria*100,2) }}%</p>
          <p><li>Normal: {{ round($cmbNormal/$totalAntropometria*100,2) }}%</p>
        </ul>
        <p><li><strong>Porcentaje pliegue tricipital (%)</strong></p>
        <ul type = circle>
          <p><li>Déficit de grasa severo: {{ round($ptSevera/$totalAntropometria*100,2) }}%</p>
          <p><li>Déficit de grasa moderada: {{ round($ptModerada/$totalAntropometria*100,2) }}%</p>
          <p><li>Déficit de grasa leve: {{ round($ptLeve/$totalAntropometria*100,2) }}%</p>
          <p><li>Normal: {{ round($ptNormal/$totalAntropometria*100,2) }}%</p>
          <p><li>Exceso de grasa: {{ round($ptExceso/$totalAntropometria*100,2) }}%</p>
        </ul>
      </ul>

  
  </div>
@stop



