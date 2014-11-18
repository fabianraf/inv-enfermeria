@extends('layouts.default')
    
@section('content')

<h2>Valor nutricional - Frecuencia de consumo de alimentos en los bares de la Universidad</h2>
<br>
<div class="table-responsive">    
    <table class="table table-bordered">
      <tr>              
        <td style="text-align:left"><b>Nombres</td>
        <td style="text-align:left"><b>Edad</td>
        <td style="text-align:left"><b>Género</td>
        <td style="text-align:left"><b>Humedad</td>
        <td style="text-align:left"><b>Calorías</td>
        <td style="text-align:left"><b>Proteínas</td>
        <td style="text-align:left"><b>Hidratos de C</td>
        <td style="text-align:left"><b>Fibra dietaria</td>            
        <td style="text-align:left"><b>Lípidos</td>
        <td style="text-align:left"><b>Acidos grasos saturados</td>
        <td style="text-align:left"><b>Acidos grasos monoinsat</td>
        <td style="text-align:left"><b>Acidos grasos polinsat</td>
        <td style="text-align:left"><b>Colesterol</td>
        <td style="text-align:left"><b>N6</td>
        <td style="text-align:left"><b>N3</td>
        <td style="text-align:left"><b>Caroteno</td>
        <td style="text-align:left"><b>Retinol re</td>
        <td style="text-align:left"><b>Vitamina A total re</td>
        <td style="text-align:left"><b>Vitamina B1</td>
        <td style="text-align:left"><b>Vitamina B2</td>
        <td style="text-align:left"><b>Niacina</td>
        <td style="text-align:left"><b>Vitamina B6</td>
        <td style="text-align:left"><b>Vitamina B12</td>
        <td style="text-align:left"><b>Folatos</td>
        <td style="text-align:left"><b>Acido pantogénico</td>
        <td style="text-align:left"><b>Vitamina C</td>
        <td style="text-align:left"><b>Vitamina E</td>
        <td style="text-align:left"><b>Calcio</td>
        <td style="text-align:left"><b>Cobre</td>
        <td style="text-align:left"><b>Hierro</td>
        <td style="text-align:left"><b>Magnesio</td>
        <td style="text-align:left"><b>Fósforo</td>
        <td style="text-align:left"><b>Potasio</td>
        <td style="text-align:left"><b>Selenio</td>
        <td style="text-align:left"><b>Sodio</td>
        <td style="text-align:left"><b>Zinc</td>
        <td style="text-align:left"><b>Cenizas</td>
        <td style="text-align:left"><b>Acido fólico</td>
        <td style="text-align:left"><b>Fracción comestible</td>
        <td style="text-align:left"><b>Carbohidratos disponibles</td>
        <td style="text-align:left"><b>Fibra cruda</td>
        <td style="text-align:left"><b>Ver info</td>        
      </tr>         
        @foreach($users as $estudiante)        
        <tr>      
        <td style="text-align:left">{{ $estudiante->nombre.' '.$estudiante->apellido }}</td>
        <td style="text-align:left">{{ $estudiante->getEdad()." años" }}</td>
        <td style="text-align:left">{{ $estudiante->genero }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalHumedad(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalCalorias(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalProteinas(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalHidratosDeC(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalFibraDietaria(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalLipidos(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalAcidosGrasosSaturados(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalAcidosGrasosMonoinsat(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalAcidosGrasosPolinsat(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalColesterol(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalN6(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalN3(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalCaroteno(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalRetinolRe(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalVitATotalRe(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalVitB1(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalVitB2(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalNiacina(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalVitB6(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalVitB12(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalFolatos(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalAcidoPantogenico(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalVitC(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalVitE(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalCalcio(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalCobre(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalHierro(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalMagnesio(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalFosforo(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalPotasio(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalSelenio(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalSodio(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalZinc(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalCenizas(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalAcidoFolico(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalFraccionComestible(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalCarbohidratosDisponibles(2), 2) }}</td>
        <td style="text-align:left"><b>{{ round($estudiante->getTotalFibraCruda(2), 2) }}</td>
        <?php echo "<td style='text-align:left'><a href='/reportes/consumo_alimentos_bares/".$estudiante->id."'><span class='glyphicon glyphicon-search'></span></td>";?>
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>
@stop



