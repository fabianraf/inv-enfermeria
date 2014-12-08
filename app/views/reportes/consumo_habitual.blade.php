@extends('layouts.default')
    
@section('content')

<h2>Consumo habitual de alimentos</h2>
<hr>    
<div class="table-responsive">    
    </br>
    <table class="table table-no-border table-hover table-with-text-aligned-to-the-left">
      <thead>              
            <th>Nombres</th>
            <th>Edad</th>
            <th>Género</th>
            <th>CHO (g)</th>
            <th>PROT (g)</th>
            <th>GRAS (g)</th>
            <th>Kcal Total</th>
      </thead>         
        @foreach($users as $estudiante)        
        <tr>
            <td>{{ $estudiante->nombre.' '.$estudiante->apellido }}</td>
            <td>{{ $estudiante->getEdad()." años" }}</td>
            <td>{{ $estudiante->genero }}</td>
            <?php 
                  $totalCHO = 0;
                  $totalPROT = 0;
                  $totalGRAS = 0;
                  $totalKcal = 0;
             ?>
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                  @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                              <?php 
                                    if($ingrediente->grupo_de_alimentos=='L'){
                                          $totalCHO += $ingrediente->numero_de_porciones*0;
                                          $totalPROT += $ingrediente->numero_de_porciones*0;
                                          $totalGRAS += $ingrediente->numero_de_porciones*0;
                                          $totalKcal += $ingrediente->numero_de_porciones*0;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='LE'){
                                          $totalCHO += $ingrediente->numero_de_porciones*12;
                                          $totalPROT += $ingrediente->numero_de_porciones*8;
                                          $totalGRAS += $ingrediente->numero_de_porciones*8;
                                          $totalKcal += $ingrediente->numero_de_porciones*150;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='LSD'){
                                          $totalCHO += $ingrediente->numero_de_porciones*12;
                                          $totalPROT += $ingrediente->numero_de_porciones*8;
                                          $totalGRAS += $ingrediente->numero_de_porciones*5;
                                          $totalKcal += $ingrediente->numero_de_porciones*120;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='LD'){
                                          $totalCHO += $ingrediente->numero_de_porciones*12;
                                          $totalPROT += $ingrediente->numero_de_porciones*8;
                                          $totalGRAS += $ingrediente->numero_de_porciones*1;
                                          $totalKcal += $ingrediente->numero_de_porciones*90;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='V'){
                                          $totalCHO += $ingrediente->numero_de_porciones*5;
                                          $totalPROT += $ingrediente->numero_de_porciones*2;
                                          $totalGRAS += $ingrediente->numero_de_porciones*0;
                                          $totalKcal += $ingrediente->numero_de_porciones*25;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='F'){
                                          $totalCHO += $ingrediente->numero_de_porciones*15;
                                          $totalPROT += $ingrediente->numero_de_porciones*0;
                                          $totalGRAS += $ingrediente->numero_de_porciones*0;
                                          $totalKcal += $ingrediente->numero_de_porciones*60;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='Al'){
                                          $totalCHO += $ingrediente->numero_de_porciones*15;
                                          $totalPROT += $ingrediente->numero_de_porciones*2;
                                          $totalGRAS += $ingrediente->numero_de_porciones*5;
                                          $totalKcal += $ingrediente->numero_de_porciones*150;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='Az'){
                                          $totalCHO += $ingrediente->numero_de_porciones*10;
                                          $totalPROT += $ingrediente->numero_de_porciones*0;
                                          $totalGRAS += $ingrediente->numero_de_porciones*0;
                                          $totalKcal += $ingrediente->numero_de_porciones*40;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='C'){
                                          $totalCHO += $ingrediente->numero_de_porciones*0;
                                          $totalPROT += $ingrediente->numero_de_porciones*7;
                                          $totalGRAS += $ingrediente->numero_de_porciones*5;
                                          $totalKcal += $ingrediente->numero_de_porciones*75;
                                    }
                                    if($ingrediente->grupo_de_alimentos=='G'){
                                          $totalCHO += $ingrediente->numero_de_porciones*0;
                                          $totalPROT += $ingrediente->numero_de_porciones*0;
                                          $totalGRAS += $ingrediente->numero_de_porciones*5;
                                          $totalKcal += $ingrediente->numero_de_porciones*45;
                                    }                                    
                              ?>
                        @endforeach
                  @endforeach
            @endforeach        
            <td>{{ $totalCHO }}</td>            
            <td>{{ $totalPROT }}</td>
            <td>{{ $totalGRAS }}</td>
            <td>{{ $totalKcal }}</td>
            <td></td>                                  
            
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>

@stop



