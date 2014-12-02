@extends('layouts.default')
    
@section('content')


<h2>Información de pruebas bioquímicas</h2>
<hr>
<div class="table-responsive">  
  </br>
    <table class="table table-no-border table-hover table-with-text-aligned-to-the-left">
      <thead> 
        <th></th>              
        <th>Nombres</th>
        <th>Edad</th>
        <th>Género</th>               
        <th>WBC (K/uL)</th>
        <th>Neutrofilos (%)</th>
        <th>Linfocitos (%)</th>
        <th>Monocitos (%)</th>
        <th>Eosinofilos (%)</th>
        <th>Basofilos (%)</th>
        <th>Linfocitos atípicos (%)</th>
        <th>Células grandes inmaduras (%)</th>
        <th>RBC (M/uL)</th>
        <th>HGB (g/dL)</th>
        <th>HCT (%)</th>
        <th>RDW (%)</th>
        <th>PLT (K/uL)</th>
        <th>MCH (pg)</th>
        <th>MCHC (g/dL)</th>
        <th>MCV</th>
        <th>Colesterol</th>
        <th>HDL Colesterol</th>
        <th>Triglicéridos</th>
        <th>Glucosa ayunas</th>
        <th>LDL Colesterol</th>
        <th>HBSAG</th>        
      </thead>         
        @foreach($users as $usuario)        
        <tr>
          <?php echo "<td><a href='/reportes/bioquimica/".$usuario->id."'><span class='glyphicon glyphicon-search'></span></td>";?>    
          <td>{{ $usuario->nombre.' '.$usuario->apellido }}</td>
          <td>{{ $usuario->getEdad()." años" }}</td>
          <td>{{ $usuario->genero }}</td>
          <td>{{ $usuario->bioquimica()->first()->wbc }}</td>
          <td>{{ $usuario->bioquimica()->first()->neutrofilos }}</td>
          <td>{{ $usuario->bioquimica()->first()->linfocitos }}</td>
          <td>{{ $usuario->bioquimica()->first()->monocitos }}</td>
          <td>{{ $usuario->bioquimica()->first()->eosinofilos }}</td>
          <td>{{ $usuario->bioquimica()->first()->basofilos }}</td>
          <td>{{ $usuario->bioquimica()->first()->linfocitos_atipicos }}</td>
          <td>{{ $usuario->bioquimica()->first()->celulas_grandes_inmaduras }}</td>
          <td>{{ $usuario->bioquimica()->first()->rbc }}</td>
          <td>{{ $usuario->bioquimica()->first()->hgb }}</td>
          <td>{{ $usuario->bioquimica()->first()->hct }}</td>
          <td>{{ $usuario->bioquimica()->first()->rdw }}</td>
          <td>{{ $usuario->bioquimica()->first()->plt }}</td>
          <td>{{ $usuario->bioquimica()->first()->mch }}</td>
          <td>{{ $usuario->bioquimica()->first()->mchc }}</td>
          <td>{{ $usuario->bioquimica()->first()->mcv }}</td>
          <td>{{ $usuario->bioquimica()->first()->colesterol }}</td>
          <td>{{ $usuario->bioquimica()->first()->hdl_colesterol }}</td>
          <td>{{ $usuario->bioquimica()->first()->trigliceridos }}</td>
          <td>{{ $usuario->bioquimica()->first()->glucosa_ayunas }}</td>
          <td>{{ $usuario->bioquimica()->first()->ldl_colesterol }}</td>
          <td>{{ $usuario->bioquimica()->first()->hbsag }}</td>
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>
@stop



