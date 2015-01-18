@extends('layouts.default')
    
@section('content')

<h2>Frecuencia de consumo de alimentos en hogar, Universidad y alrededores</h2>
<hr>    
<div class="table-responsive">    
    </br>
    <table class="table table-no-border table-hover table-with-text-aligned-to-the-left">
      <thead>              
            <th></th>
            <th></th> 
            <th>Nombres</th>
            <th>Edad</th>
            <th>Género</th>            
            <th>Humedad</th>
            <th>Calorías</th>            
            <th>Proteínas</th>
            <th>Hidratos de C</th>
            <th>Fibra dietaria</th>            
            <th>Lípidos</th>
            <th>Acidos grasos saturados</th>
            <th>Acidos grasos monoinsat</th>
            <th>Acidos grasos polinsat</th>
            <th>Colesterol</th>
            <th>N6</th>
            <th>N3</th>
            <th>Caroteno</th>
            <th>Retinol re</th>
            <th>Vitamina A total re</th>
            <th>Vitamina B1</th>
            <th>Vitamina B2</th>
            <th>Niacina</th>
            <th>Vitamina B6</th>
            <th>Vitamina B12</th>
            <th>Folatos</th>
            <th>Acido pantogénico</th>
            <th>Vitamina C</th>
            <th>Vitamina E</th>
            <th>Calcio</th>
            <th>Cobre</th>
            <th>Hierro</th>
            <th>Magnesio</th>
            <th>Fósforo</th>
            <th>Potasio</th>
            <th>Selenio</th>
            <th>Sodio</th>
            <th>Zinc</th>
            <th>Cenizas</th>
            <th>Acido fólico</th>
            <th>Fracción comestible</th>
            <th>Carbohidratos disponibles</th>
            <th>Fibra cruda</th>
      </thead> 
      <?php
            $totalCalorias = 0;
            $totalHumedad = 0;
            $totalProteinas = 0;
            $totalHidratosDeC = 0;
            $totalFibraDietaria = 0;
            $totalLipidos = 0;
            $totalAcidosGrasosSaturados = 0;
            $totalAcidosGrasosMonoinsat = 0;
            $totalAcidosGrasosPolinsat = 0;
            $totalColesterol = 0;
            $totalN6 = 0;
            $totalN3 = 0;
            $totalCaroteno = 0;
            $totalRetinolRe = 0;
            $totalVitATotalRe = 0;
            $totalVitB1 = 0;
            $totalVitB2 = 0;
            $totalNiacina = 0;
            $totalVitB6 = 0;
            $totalVitB12 = 0;
            $totalFolatos = 0;
            $totalAcidoPantogenico = 0;
            $totalVitC = 0;
            $totalVitE = 0;
            $totalCalcio = 0;
            $totalCobre = 0;
            $totalHierro = 0;
            $totalMagnesio = 0;
            $totalFosforo = 0;
            $totalPotasio = 0;
            $totalSelenio = 0;
            $totalSodio = 0;
            $totalZinc = 0;
            $totalCenizas = 0;
            $totalAcidoFolico = 0;
            $totalFraccionComestible = 0;
            $totalCarbohidratosDisponibles = 0;
            $totalFibraCruda = 0;
            $totalEstudiantes = 0;
      ?>
        @foreach($users as $estudiante)
        @if(Auth::user()->perfiles_usuario_id == "3")
        @if($estudiante->bioquimica)  
        <tr>
            <?php echo "<td><a href='/reportes/consumo_alimentos/".$estudiante->id."'><span class='glyphicon glyphicon-search'></span></td>";?>      
            <?php echo "<td><a href='/reportes/calcular_datos_universidad/".$estudiante->id."'><span class='glyphicon glyphicon-refresh'></span></td>";?>      
            <td>{{ $estudiante->nombre.' '.$estudiante->apellido }}</td>
            <td>{{ $estudiante->getEdad()." años" }}</td>
            <td>{{ $estudiante->genero }}</td>
            @if(isset($estudiante->resultadoEncuestasAlimentosUniversidad->usuario_id))
            <?php
                  $totalCalorias += round($estudiante->resultadoEncuestasAlimentosUniversidad->calorias,2);
                  $totalHumedad += round($estudiante->resultadoEncuestasAlimentosUniversidad->humedad,2);
                  $totalProteinas += round($estudiante->resultadoEncuestasAlimentosUniversidad->proteinas, 2);
                  $totalHidratosDeC += round($estudiante->resultadoEncuestasAlimentosUniversidad->hidratos_de_c, 2);
                  $totalFibraDietaria += round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_dietaria, 2);
                  $totalLipidos += round($estudiante->resultadoEncuestasAlimentosUniversidad->lipidos, 2);
                  $totalAcidosGrasosSaturados += round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados, 2);
                  $totalAcidosGrasosMonoinsat += round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat, 2);
                  $totalAcidosGrasosPolinsat += round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat, 2);
                  $totalColesterol += round($estudiante->resultadoEncuestasAlimentosUniversidad->colesterol, 2);
                  $totalN6 += round($estudiante->resultadoEncuestasAlimentosUniversidad->n6, 2);
                  $totalN3 += round($estudiante->resultadoEncuestasAlimentosUniversidad->n3, 2);
                  $totalCaroteno += round($estudiante->resultadoEncuestasAlimentosUniversidad->caroteno, 2);
                  $totalRetinolRe += round($estudiante->resultadoEncuestasAlimentosUniversidad->retinol_re, 2);
                  $totalVitATotalRe += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_a_total_re, 2);
                  $totalVitB1 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b1, 2);
                  $totalVitB2 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b2, 2);
                  $totalNiacina += round($estudiante->resultadoEncuestasAlimentosUniversidad->niacina, 2);
                  $totalVitB6 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b6, 2);
                  $totalVitB12 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b12, 2);
                  $totalFolatos += round($estudiante->resultadoEncuestasAlimentosUniversidad->folatos, 2);
                  $totalAcidoPantogenico += round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_pantogenico, 2);
                  $totalVitC += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_c, 2);
                  $totalVitE += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_e, 2);
                  $totalCalcio += round($estudiante->resultadoEncuestasAlimentosUniversidad->calcio, 2);
                  $totalCobre += round($estudiante->resultadoEncuestasAlimentosUniversidad->cobre, 2);
                  $totalHierro += round($estudiante->resultadoEncuestasAlimentosUniversidad->hierro, 2);
                  $totalMagnesio += round($estudiante->resultadoEncuestasAlimentosUniversidad->magnesio, 2);
                  $totalFosforo += round($estudiante->resultadoEncuestasAlimentosUniversidad->fosforo, 2);
                  $totalPotasio += round($estudiante->resultadoEncuestasAlimentosUniversidad->potasio, 2);
                  $totalSelenio += round($estudiante->resultadoEncuestasAlimentosUniversidad->selenio, 2);
                  $totalSodio += round($estudiante->resultadoEncuestasAlimentosUniversidad->sodio, 2);
                  $totalZinc += round($estudiante->resultadoEncuestasAlimentosUniversidad->zinc, 2);
                  $totalCenizas += round($estudiante->resultadoEncuestasAlimentosUniversidad->cenizas, 2);
                  $totalAcidoFolico += round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_folico, 2);
                  $totalFraccionComestible += round($estudiante->resultadoEncuestasAlimentosUniversidad->fraccion_comestible, 2);
                  $totalCarbohidratosDisponibles += round($estudiante->resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles, 2);
                  $totalFibraCruda += round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_cruda, 2);
                  $totalEstudiantes++;
            ?>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->humedad,2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calorias,2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->proteinas, 2) }}</td>                  
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hidratos_de_c, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_dietaria, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->lipidos, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->colesterol, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n6, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n3, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->caroteno, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->retinol_re, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_a_total_re, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b1, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b2, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->niacina, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b6, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b12, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->folatos, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_pantogenico, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_c, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_e, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calcio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cobre, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hierro, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->magnesio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fosforo, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->potasio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->selenio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->sodio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->zinc, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cenizas, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_folico, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fraccion_comestible, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_cruda, 2) }}</td>
            @else
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>                 
            @endif
      </tr>
      @endif
      @else
      <tr>
            <?php echo "<td><a href='/reportes/consumo_alimentos/".$estudiante->id."'><span class='glyphicon glyphicon-search'></span></td>";?>      
            <?php echo "<td><a href='/reportes/calcular_datos_universidad/".$estudiante->id."'><span class='glyphicon glyphicon-refresh'></span></td>";?>      
            <td>{{ $estudiante->nombre.' '.$estudiante->apellido }}</td>
            <td>{{ $estudiante->getEdad()." años" }}</td>
            <td>{{ $estudiante->genero }}</td>
            @if(isset($estudiante->resultadoEncuestasAlimentosUniversidad->usuario_id))           
            <?php
                  $totalCalorias += round($estudiante->resultadoEncuestasAlimentosUniversidad->calorias,2);
                  $totalHumedad += round($estudiante->resultadoEncuestasAlimentosUniversidad->humedad,2);
                  $totalProteinas += round($estudiante->resultadoEncuestasAlimentosUniversidad->proteinas, 2);
                  $totalHidratosDeC += round($estudiante->resultadoEncuestasAlimentosUniversidad->hidratos_de_c, 2);
                  $totalFibraDietaria += round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_dietaria, 2);
                  $totalLipidos += round($estudiante->resultadoEncuestasAlimentosUniversidad->lipidos, 2);
                  $totalAcidosGrasosSaturados += round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados, 2);
                  $totalAcidosGrasosMonoinsat += round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat, 2);
                  $totalAcidosGrasosPolinsat += round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat, 2);
                  $totalColesterol += round($estudiante->resultadoEncuestasAlimentosUniversidad->colesterol, 2);
                  $totalN6 += round($estudiante->resultadoEncuestasAlimentosUniversidad->n6, 2);
                  $totalN3 += round($estudiante->resultadoEncuestasAlimentosUniversidad->n3, 2);
                  $totalCaroteno += round($estudiante->resultadoEncuestasAlimentosUniversidad->caroteno, 2);
                  $totalRetinolRe += round($estudiante->resultadoEncuestasAlimentosUniversidad->retinol_re, 2);
                  $totalVitATotalRe += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_a_total_re, 2);
                  $totalVitB1 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b1, 2);
                  $totalVitB2 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b2, 2);
                  $totalNiacina += round($estudiante->resultadoEncuestasAlimentosUniversidad->niacina, 2);
                  $totalVitB6 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b6, 2);
                  $totalVitB12 += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b12, 2);
                  $totalFolatos += round($estudiante->resultadoEncuestasAlimentosUniversidad->folatos, 2);
                  $totalAcidoPantogenico += round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_pantogenico, 2);
                  $totalVitC += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_c, 2);
                  $totalVitE += round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_e, 2);
                  $totalCalcio += round($estudiante->resultadoEncuestasAlimentosUniversidad->calcio, 2);
                  $totalCobre += round($estudiante->resultadoEncuestasAlimentosUniversidad->cobre, 2);
                  $totalHierro += round($estudiante->resultadoEncuestasAlimentosUniversidad->hierro, 2);
                  $totalMagnesio += round($estudiante->resultadoEncuestasAlimentosUniversidad->magnesio, 2);
                  $totalFosforo += round($estudiante->resultadoEncuestasAlimentosUniversidad->fosforo, 2);
                  $totalPotasio += round($estudiante->resultadoEncuestasAlimentosUniversidad->potasio, 2);
                  $totalSelenio += round($estudiante->resultadoEncuestasAlimentosUniversidad->selenio, 2);
                  $totalSodio += round($estudiante->resultadoEncuestasAlimentosUniversidad->sodio, 2);
                  $totalZinc += round($estudiante->resultadoEncuestasAlimentosUniversidad->zinc, 2);
                  $totalCenizas += round($estudiante->resultadoEncuestasAlimentosUniversidad->cenizas, 2);
                  $totalAcidoFolico += round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_folico, 2);
                  $totalFraccionComestible += round($estudiante->resultadoEncuestasAlimentosUniversidad->fraccion_comestible, 2);
                  $totalCarbohidratosDisponibles += round($estudiante->resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles, 2);
                  $totalFibraCruda += round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_cruda, 2);
                  $totalEstudiantes++;
            ?>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->humedad,2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calorias,2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->proteinas, 2) }}</td>                  
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hidratos_de_c, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_dietaria, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->lipidos, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->colesterol, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n6, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n3, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->caroteno, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->retinol_re, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_a_total_re, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b1, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b2, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->niacina, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b6, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b12, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->folatos, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_pantogenico, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_c, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_e, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calcio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cobre, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hierro, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->magnesio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fosforo, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->potasio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->selenio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->sodio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->zinc, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cenizas, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_folico, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fraccion_comestible, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_cruda, 2) }}</td>
            @else
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>                 
            @endif
      </tr>
      @endif     
      @endforeach
    </table>
  </div>
<br>   
<div class="row">   
      <div class="col-sm-4"> 
        <h4><i><u>Promedio Nutrientes</u></i></h4>        
        <ul type = square>            
            <p><li><strong>Humedad: </strong>{{ round($totalHumedad/$totalEstudiantes,2) }}</p>
            <p><li><strong>Calorías: </strong>{{ round($totalCalorias/$totalEstudiantes,2) }}</p>
            <p><li><strong>Proteínas: </strong>{{ round($totalProteinas/$totalEstudiantes,2) }}</p>
            <p><li><strong>Hidratos de C: </strong>{{ round($totalHidratosDeC/$totalEstudiantes,2) }}</p>
            <p><li><strong>Fibra dietaria: </strong>{{ round($totalFibraDietaria/$totalEstudiantes,2) }}</p>
            <p><li><strong>Lípidos: </strong>{{ round($totalLipidos/$totalEstudiantes,2) }}</p>
            <p><li><strong>Acidos grasos saturados: </strong>{{ round($totalAcidosGrasosSaturados/$totalEstudiantes,2) }}</p>
            <p><li><strong>Acidos grasos monoinsat: </strong>{{ round($totalAcidosGrasosMonoinsat/$totalEstudiantes,2) }}</p>
            <p><li><strong>Acidos grasos polinsat: </strong>{{ round($totalAcidosGrasosPolinsat/$totalEstudiantes,2) }}</p>
            <p><li><strong>Colesterol: </strong>{{ round($totalColesterol/$totalEstudiantes,2) }}</p>
            <p><li><strong>N6: </strong>{{ round($totalN6/$totalEstudiantes,2) }}</p>
            <p><li><strong>N3: </strong>{{ round($totalN3/$totalEstudiantes,2) }}</p>
            <p><li><strong>Caroteno: </strong>{{ round($totalCaroteno/$totalEstudiantes,2) }}</p>
        </div>
        <div class="col-sm-4">
            <p><li><strong>Retinol re: </strong>{{ round($totalRetinolRe/$totalEstudiantes,2) }}</p>
            <p><li><strong>Vitamina A total re: </strong>{{ round($totalVitATotalRe/$totalEstudiantes,2) }}</p>
            <p><li><strong>Vitamina B1: </strong>{{ round($totalVitB1/$totalEstudiantes,2) }}</p>
            <p><li><strong>Vitamina B2: </strong>{{ round($totalVitB2/$totalEstudiantes,2) }}</p>
            <p><li><strong>Niacina: </strong>{{ round($totalNiacina/$totalEstudiantes,2) }}</p>
            <p><li><strong>Vitamina B6: </strong>{{ round($totalVitB6/$totalEstudiantes,2) }}</p>
            <p><li><strong>Vitamina B12: </strong>{{ round($totalVitB12/$totalEstudiantes,2) }}</p>
            <p><li><strong>Folatos: </strong>{{ round($totalFolatos/$totalEstudiantes,2) }}</p>
            <p><li><strong>Acido pantogénico: </strong>{{ round($totalAcidoPantogenico/$totalEstudiantes,2) }}</p>
            <p><li><strong>Vitamina C: </strong>{{ round($totalVitC/$totalEstudiantes,2) }}</p>
            <p><li><strong>Vitamina E: </strong>{{ round($totalVitE/$totalEstudiantes,2) }}</p>
            <p><li><strong>Calcio: </strong>{{ round($totalCalcio/$totalEstudiantes,2) }}</p>
            <p><li><strong>Cobre: </strong>{{ round($totalCobre/$totalEstudiantes,2) }}</p>
        </div>
        <div class="col-sm-4">
            <p><li><strong>Hierro: </strong>{{ round($totalHierro/$totalEstudiantes,2) }}</p>
            <p><li><strong>Magnesio: </strong>{{ round($totalMagnesio/$totalEstudiantes,2) }}</p>
            <p><li><strong>Fósforo: </strong>{{ round($totalFosforo/$totalEstudiantes,2) }}</p>
            <p><li><strong>Potasio: </strong>{{ round($totalPotasio/$totalEstudiantes,2) }}</p>
            <p><li><strong>Selenio: </strong>{{ round($totalSelenio/$totalEstudiantes,2) }}</p>
            <p><li><strong>Sodio: </strong>{{ round($totalSodio/$totalEstudiantes,2) }}</p>
            <p><li><strong>Zinc: </strong>{{ round($totalZinc/$totalEstudiantes,2) }}</p>
            <p><li><strong>Cenizas: </strong>{{ round($totalCenizas/$totalEstudiantes,2) }}</p>
            <p><li><strong>Acido fólico: </strong>{{ round($totalAcidoFolico/$totalEstudiantes,2) }}</p>
            <p><li><strong>Fracción comestible: </strong>{{ round($totalFraccionComestible/$totalEstudiantes,2) }}</p>
            <p><li><strong>Carbohidratos disponibles: </strong>{{ round($totalCarbohidratosDisponibles/$totalEstudiantes,2) }}</p>
            <p><li><strong>Fibra cruda: </strong>{{ round($totalFibraCruda/$totalEstudiantes,2) }}</p>
        </div>        
      </ul>
    </div>

</div>
</div>

@stop



