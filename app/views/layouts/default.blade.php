<!DOCTYPE html>
<html>
	<head>
		<title> 
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="img/png" href="img/N2RICONO.png"/>
		<!-- CSS are placed here -->
		{{ HTML::style('bootstrap/css/bootstrap.css') }}
		{{ HTML::style('bootstrap/css/bootstrap-responsive.css') }}
		{{ HTML::style('bootstrap/css/datepicker.css') }}
		{{ HTML::style('css/app.css') }}

		{{ HTML::style('bootstrap/less/datepicker.less') }}

		<!-- js are placed here -->
		{{ HTML::script('/js/jquery/jquery-1.11.0.min.js') }}

	</head>

	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-inverse transparent-nav menu" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						
					</button>
					 <a class="navbar-brand" href="/">Enfermeria</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav">
						<?php if (Auth::check()){							
							?>

							<li class="dropdown pull-right" >
								<a href="#" class="dropdown-toggle text-white"  data-toggle="dropdown">{{(Auth::user() -> email) }} 
								<b class="caret"></b></a> 
								<ul class="dropdown-menu">
									<li>
										{{ HTML::link('/profile', "Ver Perfil" ) }}
									</li>									
									<li class="divider"></li>
									<li>
										{{ HTML::link('/edit', "Editar Perfil" ) }}
									</li>									
									<li class="divider"></li>
									<li>
										<a href="/logout">Logout</a>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle text-white"  data-toggle="dropdown">Encuestas<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										{{ HTML::link('/encuesta_consumo_alimentos', "Consumo de Alimentos en Universidad y alrededores" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_consumo_alimentos_bares', "Consumo de Alimentos en Bares" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_consumo_habitual', "Consumo Habitual de Alimentos" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_higiene_personal', "Control de higiene del personal de bares y comedores de la PUCE" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_manipulacion_comedores', "Control de manipulación de alimentos e higiene de los comedores de la PUCE" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_manipulacion_bares', "Control de manipulación de alimentos e higiene de los bares de la PUCE" ) }}
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle text-white"  data-toggle="dropdown">Administración<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										{{ HTML::link('antropometria', "Antropometria" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('tipo_de_alimentos/ingresar', "Ingresar Tipo de Alimentos" ) }}
									</li>
								</ul>
							</li>
						</ul>
						
						
							<?php }else{ ?>
								<ul class="nav navbar-nav">
									<li>
										<a class="text-white" href="/registrar">Registro</a>
									</li>
									<li>
										<a class="text-white" href="/login">Login</a>
									</li>
								</ul>
							<?php } ?>
				
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		
		<div class="container">

        <div class="row">
						@yield('content')
            <div class="col-lg-4">
                
                
								
            </div>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>By Us.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
		
		<!-- Scripts are placed here -->

		{{ HTML::script('/bootstrap/js/bootstrap.min.js') }}
		{{ HTML::script('/js/app.js') }}
		{{ HTML::script('/bootstrap/js/bootstrap-datepicker.js') }}

	</body>
</html>
