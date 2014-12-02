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
  </div>
</div>
</div>
@stop



