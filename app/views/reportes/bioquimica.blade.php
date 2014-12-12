@extends('layouts.default')
    
@section('content')

<div class="col-lg-12">
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
   <?php 
    $wbcBajo = Bioquimica::where("interpretacion_wbc", "=", 'Bajo')->get()->count();
    $wbcNormal = Bioquimica::where("interpretacion_wbc", "=", 'Normal')->get()->count();
    $wbcAlto = Bioquimica::where("interpretacion_wbc", "=", 'Alto')->get()->count();

    $neutrofilosBajo = Bioquimica::where("interpretacion_neutrofilos", "=", 'Bajo')->get()->count();
    $neutrofilosNormal = Bioquimica::where("interpretacion_neutrofilos", "=", 'Normal')->get()->count();
    $neutrofilosAlto = Bioquimica::where("interpretacion_neutrofilos", "=", 'Alto')->get()->count();

    $linfocitosBajo = Bioquimica::where("interpretacion_linfocitos", "=", 'Bajo')->get()->count();
    $linfocitosNormal = Bioquimica::where("interpretacion_linfocitos", "=", 'Normal')->get()->count();
    $linfocitosAlto = Bioquimica::where("interpretacion_linfocitos", "=", 'Alto')->get()->count();

    $monocitosBajo = Bioquimica::where("interpretacion_monocitos", "=", 'Bajo')->get()->count();
    $monocitosNormal = Bioquimica::where("interpretacion_monocitos", "=", 'Normal')->get()->count();
    $monocitosAlto = Bioquimica::where("interpretacion_monocitos", "=", 'Alto')->get()->count();

    $eosinofilosBajo = Bioquimica::where("interpretacion_eosinofilos", "=", 'Bajo')->get()->count();
    $eosinofilosNormal = Bioquimica::where("interpretacion_eosinofilos", "=", 'Normal')->get()->count();
    $eosinofilosAlto = Bioquimica::where("interpretacion_eosinofilos", "=", 'Alto')->get()->count();

    $basofilosBajo = Bioquimica::where("interpretacion_basofilos", "=", 'Bajo')->get()->count();
    $basofilosNormal = Bioquimica::where("interpretacion_basofilos", "=", 'Normal')->get()->count();
    $basofilosAlto = Bioquimica::where("interpretacion_basofilos", "=", 'Alto')->get()->count();

    $linfocitosAtipicosBajo = Bioquimica::where("interpretacion_linfocitos", "=", 'Bajo')->get()->count();
    $linfocitosAtipicosNormal = Bioquimica::where("interpretacion_linfocitos", "=", 'Normal')->get()->count();
    $linfocitosAtipicosAlto = Bioquimica::where("interpretacion_linfocitos", "=", 'Alto')->get()->count();

    $celulasGrandesInmadurasNormal = Bioquimica::where("interpretacion_celulas_grandes_inmaduras", "=", 'Normal')->get()->count();    
    $celulasGrandesInmadurasAlto = Bioquimica::where("interpretacion_celulas_grandes_inmaduras", "=", 'Alto')->get()->count();

    $rbcBajo = Bioquimica::where("interpretacion_rbc", "=", 'Bajo')->get()->count();
    $rbcNormal = Bioquimica::where("interpretacion_rbc", "=", 'Normal')->get()->count();
    $rbcAlto = Bioquimica::where("interpretacion_rbc", "=", 'Alto')->get()->count();

    $hgbBajo = Bioquimica::where("interpretacion_hgb", "=", 'Bajo')->get()->count();
    $hgbNormal = Bioquimica::where("interpretacion_hgb", "=", 'Normal')->get()->count();
    $hgbAlto = Bioquimica::where("interpretacion_hgb", "=", 'Alto')->get()->count();

    $hctBajo = Bioquimica::where("interpretacion_hct", "=", 'Bajo')->get()->count();
    $hctNormal = Bioquimica::where("interpretacion_hct", "=", 'Normal')->get()->count();
    $hctAlto = Bioquimica::where("interpretacion_hct", "=", 'Alto')->get()->count();

    $rdwBajo = Bioquimica::where("interpretacion_rdw", "=", 'Bajo')->get()->count();
    $rdwNormal = Bioquimica::where("interpretacion_rdw", "=", 'Normal')->get()->count();
    $rdwAlto = Bioquimica::where("interpretacion_rdw", "=", 'Alto')->get()->count();

    $pltBajo = Bioquimica::where("interpretacion_plt", "=", 'Bajo')->get()->count();
    $pltNormal = Bioquimica::where("interpretacion_plt", "=", 'Normal')->get()->count();
    $pltAlto = Bioquimica::where("interpretacion_plt", "=", 'Alto')->get()->count();

    $mchBajo = Bioquimica::where("interpretacion_mch", "=", 'Bajo')->get()->count();
    $mchNormal = Bioquimica::where("interpretacion_mch", "=", 'Normal')->get()->count();
    $mchAlto = Bioquimica::where("interpretacion_mch", "=", 'Alto')->get()->count();

    $mchcBajo = Bioquimica::where("interpretacion_mchc", "=", 'Bajo')->get()->count();
    $mchcNormal = Bioquimica::where("interpretacion_mchc", "=", 'Normal')->get()->count();
    $mchcAlto = Bioquimica::where("interpretacion_mchc", "=", 'Alto')->get()->count();

    $mcvBajo = Bioquimica::where("interpretacion_mcv", "=", 'Bajo')->get()->count();
    $mcvNormal = Bioquimica::where("interpretacion_mcv", "=", 'Normal')->get()->count();
    $mcvAlto = Bioquimica::where("interpretacion_mcv", "=", 'Alto')->get()->count();
    
    $colesterolNormal = Bioquimica::where("interpretacion_colesterol", "=", 'Normal')->get()->count();
    $colesterolAlto = Bioquimica::where("interpretacion_colesterol", "=", 'Alto')->get()->count();

    $hdlColesterolBajo = Bioquimica::where("interpretacion_hdl_colesterol", "=", 'Bajo')->get()->count();
    $hdlColesterolNormal = Bioquimica::where("interpretacion_hdl_colesterol", "=", 'Normal')->get()->count();
    $hdlColesterolAlto = Bioquimica::where("interpretacion_hdl_colesterol", "=", 'Alto')->get()->count();

    $trigliceridosNormal = Bioquimica::where("interpretacion_trigliceridos", "=", 'Normal')->get()->count();
    $trigliceridosAlto = Bioquimica::where("interpretacion_trigliceridos", "=", 'Alto')->get()->count();
    
    $ldlColesterolNormal = Bioquimica::where("interpretacion_ldl_colesterol", "=", 'Normal')->get()->count();
    $ldlColesterolAlto = Bioquimica::where("interpretacion_ldl_colesterol", "=", 'Alto')->get()->count();

    $glucosaAyunasBajo = Bioquimica::where("interpretacion_glucosa_ayunas", "=", 'Bajo')->get()->count();
    $glucosaAyunasNormal = Bioquimica::where("interpretacion_glucosa_ayunas", "=", 'Normal')->get()->count();
    $glucosaAyunasAlto = Bioquimica::where("interpretacion_glucosa_ayunas", "=", 'Alto')->get()->count();

    $hbsagNoReactivo = Bioquimica::where("interpretacion_hbsag", "=", 'No Reactivo')->get()->count();
    $hbsagReactivo = Bioquimica::where("interpretacion_hbsag", "=", 'Reactivo')->get()->count();    

    $totalBioquimica = Bioquimica::get()->count();
          ?>
  <div class="row">
    <h4><i><u>Resumen Poblacional:</u></i></h4>
    <div class="col-sm-3">   
      <ul type = square>
        <p><li><strong>WBC</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($wbcBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($wbcNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($wbcAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Neutrofilos</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($neutrofilosBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($neutrofilosNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($neutrofilosAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Linfocitos</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($linfocitosBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($linfocitosNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($linfocitosAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Monocitos</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($monocitosBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($monocitosNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($monocitosAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Eosinofilos</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($eosinofilosBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($eosinofilosNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($eosinofilosAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
      </ul>
    </div>
    <div class="col-sm-3">
      <ul type = square>
        <p><li><strong>Basofilos</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($basofilosBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($basofilosNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($basofilosAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Linfocitos Atipicos</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($linfocitosAtipicosBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($linfocitosAtipicosNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($linfocitosAtipicosAlto/$totalBioquimica*100,2) }}%</p>
        </ul>      
        <p><li><strong>Celulas Grandes Inmaduras</strong></p>
        <ul type = circle>
          <p><li>Normal: {{ round($celulasGrandesInmadurasNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($celulasGrandesInmadurasAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>RBC</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($rbcBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($rbcNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($rbcAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>HGB</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($hgbBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($hgbNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($hgbAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
      </ul>
    </div>
    <div class="col-sm-3">
      <ul type = square>
        <p><li><strong>HCT</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($hctBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($hctNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($hctAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>RDW</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($rdwBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($rdwNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($rdwAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>PLT</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($pltBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($pltNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($pltAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>MCH</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($mchBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($mchNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($mchAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>MCHC</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($mchcBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($mchcNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($mchcAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
      </ul>
    </div>
    <div class="col-sm-3">
      <ul type = square>
        <p><li><strong>MCV</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($mcvBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($mcvNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($mcvAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Colesterol</strong></p>
        <ul type = circle>          
          <p><li>Normal: {{ round($colesterolNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($colesterolAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>HDL Colesterol</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($hdlColesterolBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($hdlColesterolNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($hdlColesterolAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Trigliceridos</strong></p>
        <ul type = circle>          
          <p><li>Normal: {{ round($trigliceridosNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($trigliceridosAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Ldl Colesterol</strong></p>
        <ul type = circle>          
          <p><li>Normal: {{ round($ldlColesterolNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($ldlColesterolAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>Glucosa Ayunas</strong></p>
        <ul type = circle>
          <p><li>Bajo: {{ round($glucosaAyunasBajo/$totalBioquimica*100,2) }}%</p>
          <p><li>Normal: {{ round($glucosaAyunasNormal/$totalBioquimica*100,2) }}%</p>
          <p><li>Alto: {{ round($glucosaAyunasAlto/$totalBioquimica*100,2) }}%</p>
        </ul>
        <p><li><strong>HBSAG</strong></p>
        <ul type = circle>          
          <p><li>No Reactivo: {{ round($hbsagNoReactivo/$totalBioquimica*100,2) }}%</p>
          <p><li>Reactivo: {{ round($hbsagReactivo/$totalBioquimica*100,2) }}%</p>
        </ul>
      </ul>
    </div>
  </div>
</div>
</div>
@stop



