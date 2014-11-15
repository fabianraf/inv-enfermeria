@extends('layouts.default')
    
@section('content')

{{ Form::open(array('url' => 'antropometria')) }}

{{ HTML::style('css/smoothness-jquery-ui.css') }}



<div class="col-lg-12">
  <h2>Encuestas de frecuencia de consumo de alimentos en hogar, Universidad y alrededores </h2>
  <hr>
  </br>
    <table class="table table-no-border ">
      <tr>              
        <td style="text-align:left"><b>Nombres</td>
        <td style="text-align:left"><b>Edad</td>
        <td style="text-align:left"><b>Género</td>
        <td style="text-align:left"><b>Ver info</td>        
      </tr>         
        @foreach($users as $usuario)        
        <tr>      
        <td style="text-align:left">{{ $usuario->nombre.' '.$usuario->apellido }}</td>
        <td style="text-align:left">{{ $usuario->getEdad()." años" }}</td>
        <td style="text-align:left">{{ $usuario->genero }}</td>
        <?php echo "<td style='text-align:left'><a href='/reportes/consumo_alimentos/".$usuario->id."'><span class='glyphicon glyphicon-search'></span></td>";?>
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>

<?php echo $users->links(); ?>
@stop



