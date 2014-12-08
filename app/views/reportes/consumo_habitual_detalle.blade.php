@extends('layouts.default')
    
@section('content')

<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/consumo_habitual"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>    
    </div><br>
  @endif
  @if($estudiante->encuestaAlimentosUniversidad)
    <h2>Consumo habitual de alimentos</h2>
    <hr>
    </br>
    <div class="col-md-4 col-lg-9" >
      <h4><i><u>Datos personales</u></i></h4>
      <ul type = square>
        <p><li><strong>Email: </strong>{{ $estudiante->email }}</p>
        <p><li><strong>Nombre: </strong>{{ $estudiante->nombre.' '. $estudiante->apellido}}</p>
        <p><li><strong>Edad: </strong>{{ $estudiante->getEdad()}} años</p>        
      </ul>
    </div>

    <div class="row">   
      <div class="col-sm-4">       
            <h4><i><u>Desayuno</u></i></h4>        
            <ul type = square>
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='desayuno')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        <p><li>{{$preparacionCHA->nombre_alimento}}:</p>
                        <ul type = circle>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <p><li>{{$ingrediente->ingrediente.','.$ingrediente->cantidad_en_medidas_caseras.','.$ingrediente->numero_de_porciones.','.$ingrediente->grupo_de_alimentos}}</p>
                        @endforeach
                        </ul>
                    @endforeach
                @endif
            @endforeach
            </ul><br>
            <h4><i><u>Media Mañana</u></i></h4>        
            <ul type = square>
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='media_manana')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        <p><li>{{$preparacionCHA->nombre_alimento}}:</p>
                        <ul type = circle>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <p><li>{{$ingrediente->ingrediente.','.$ingrediente->cantidad_en_medidas_caseras.','.$ingrediente->numero_de_porciones.','.$ingrediente->grupo_de_alimentos}}</p>
                        @endforeach
                        </ul>
                    @endforeach
                @endif
            @endforeach
            </ul><br>        
        </div>
        <div class="col-sm-4">
            <h4><i><u>Almuerzo</u></i></h4>        
            <ul type = square>
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='almuerzo')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        <p><li>{{$preparacionCHA->nombre_alimento}}:</p>
                        <ul type = circle>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <p><li>{{$ingrediente->ingrediente.','.$ingrediente->cantidad_en_medidas_caseras.','.$ingrediente->numero_de_porciones.','.$ingrediente->grupo_de_alimentos}}</p>
                        @endforeach
                        </ul>
                    @endforeach
                @endif
            @endforeach
            </ul><br>            
        </div>
        <div class="col-sm-4">
            <h4><i><u>Media Tarde</u></i></h4>        
            <ul type = square>
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='media_tarde')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        <p><li>{{$preparacionCHA->nombre_alimento}}:</p>
                        <ul type = circle>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <p><li>{{$ingrediente->ingrediente.','.$ingrediente->cantidad_en_medidas_caseras.','.$ingrediente->numero_de_porciones.','.$ingrediente->grupo_de_alimentos}}</p>
                        @endforeach
                        </ul>
                    @endforeach
                @endif
            @endforeach
            </ul><br>
            <h4><i><u>Cena</u></i></h4>        
            <ul type = square>
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='merienda')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        <p><li>{{$preparacionCHA->nombre_alimento}}:</p>
                        <ul type = circle>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <p><li>{{$ingrediente->ingrediente.','.$ingrediente->cantidad_en_medidas_caseras.','.$ingrediente->numero_de_porciones.','.$ingrediente->grupo_de_alimentos}}</p>
                        @endforeach
                        </ul>
                    @endforeach
                @endif
            @endforeach
            </ul><br>            
        </div>            
      
    </div>
    *Información de ingredientes: nombre, cantidad en medidas caseras, número de porciones y grupo de alimento.
</div>

@endif
@stop



  