@extends('layouts.default')
    
@section('content')


<h2>Información de pruebas bioquímicas</h2>
<hr>
<div class="table-responsive">  
  </br>
    <table class="table table-no-border ">
      <tr> 
        <td style="text-align:left"><b></td>              
        <td style="text-align:left"><b>Nombres</td>
        <td style="text-align:left"><b>Edad</td>
        <td style="text-align:left"><b>Género</td>               
      </tr>         
        @foreach($users as $usuario)        
        <tr>
          <?php echo "<td style='text-align:left'><a href='/reportes/bioquimica/".$usuario->id."'><span class='glyphicon glyphicon-search'></span></td>";?>    
          <td style="text-align:left">{{ $usuario->nombre.' '.$usuario->apellido }}</td>
          <td style="text-align:left">{{ $usuario->getEdad()." años" }}</td>
          <td style="text-align:left">{{ $usuario->genero }}</td>
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>

<?php echo $users->links(); ?>
@stop



