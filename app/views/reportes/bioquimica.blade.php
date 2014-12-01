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
      </thead>         
        @foreach($users as $usuario)        
        <tr>
          <?php echo "<td><a href='/reportes/bioquimica/".$usuario->id."'><span class='glyphicon glyphicon-search'></span></td>";?>    
          <td>{{ $usuario->nombre.' '.$usuario->apellido }}</td>
          <td>{{ $usuario->getEdad()." años" }}</td>
          <td>{{ $usuario->genero }}</td>
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>

<?php echo $users->links(); ?>
@stop



