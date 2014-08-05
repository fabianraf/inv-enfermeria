@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-8">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Datos personales</h1>
    <hr>    	
			<div class="col row">			
				<div class="col-md-4 col-lg-8" >
					<p>
						<strong>Email:</strong>
						{{ $user->email }}
					</p>
					<p>
						<strong>Cedula:</strong>
						{{ $user->cedula }}
					</p>
					<p>
						<strong>Nombre:</strong>
						{{ $user->nombre }}
					</p>
					<p>
						<strong>Apellido:</strong>
						{{ $user->apellido }}
					</p>
					<p>
						<strong>Genero:</strong>
						<?php if($user->genero=='H') echo "Hombre";
								elseif($user->genero=='M') echo "Mujer";
						?>						
					</p>
					<p>
						<strong>Direccion:</strong>
						{{ $user->direccion }}
					</p>
					<p>
						<strong>Telefono:</strong>
						{{ $user->telefono }}
					</p>
					<p>
						<strong>Fecha de nacimiento:</strong>
						{{ $user->fecha_nacimiento }}
					</p>
					<p>
						<strong>Con quién vives?:</strong>
						{{ $user->personas_hogar }}
					</p><br>									
				</div>
				

				
				
		</div>

</div>
	
@stop
	
	