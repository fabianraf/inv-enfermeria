<!DOCTYPE html>
<html>
	<head>
		<title> 
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="img/png" href="img/N2RICONO.png"/>
		<!-- CSS are placed here -->
		{{ HTML::style('bootstrap/css/bootstrap.css') }}
		{{ HTML::style('bootstrap/css/bootstrap-theme.css') }}
		{{ HTML::style('bootstrap/css/datepicker.css') }}
		{{ HTML::style('css/app.css') }}

		{{ HTML::style('bootstrap/less/datepicker.less') }}

		<!-- js are placed here -->
		{{ HTML::script('/js/jquery/jquery-1.11.0.min.js') }}
		{{ HTML::script('/js/jquery/jquery-ui.1.11.0.js') }}
		@yield('cabecera')
		
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
					 <a class="navbar-brand">SIVAN</a>
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
									<?php if(Auth::user()->edito_perfil && Auth::user()->perfiles_usuario_id != "1"){?>
										<li>
											{{ HTML::link('/profile', "Perfil" ) }}
										</li>									
										<li class="divider"></li>
									<?php }?>
									<?php if(!Auth::user()->edito_perfil && Auth::user()->perfiles_usuario_id != "1" and Auth::user()->acepto_disclaimer){?>
									<li>
										{{ HTML::link('/edit', "Editar perfil" ) }}
									</li>									
									<li class="divider"></li>
									<?php }?>
									<li>
										<a href="/logout">Logout</a>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle text-white"  data-toggle="dropdown">Encuestas<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<?php if(Auth::user()->perfiles_usuario_id == "2" and Auth::user()->acepto_disclaimer){?>
									<li>
										{{ HTML::link('/encuesta_consumo_alimentos_bares', "Frecuencia de consumo de alimentos en los bares de la Universidad" ) }}
									</li>									
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_consumo_alimentos', "Frecuencia de consumo de alimentos en hogar, Universidad y alrededores" ) }}
									</li>									
									<?php }elseif(Auth::user()->perfiles_usuario_id == "1" || Auth::user()->perfiles_usuario_id == "3") {?>									
									<li>
										{{ HTML::link('/encuestas_consumo_habitual', "Consumo habitual de alimentos" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_control_higiene_personal/empresas', "Control de higiene del personal de bares y comedores de la PUCE" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuestas_manipulacion_bares/empresas', "Control de manipulación de alimentos e higiene de los bares de la PUCE" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('/encuesta_manipulacion_comedores/empresas', "Control de manipulación de alimentos e higiene de los comedores de la PUCE" ) }}
									</li>									
									<li class="divider"></li>
									<li>
										{{ HTML::link('antropometria', "Gestión antropométrica" ) }}											
									</li>
									<li class="divider"></li>										
									<li>
										{{ HTML::link('bioquimica', "Gestión de pruebas bioquímicas " ) }}
									</li>
									<?php } ?>
								</ul>
							</li>

							<li class="dropdown">
								<a class="dropdown-toggle text-white"  data-toggle="dropdown">Reportes<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<?php if(Auth::user()->perfiles_usuario_id == "2" and Auth::user()->acepto_disclaimer){?>
									<li>
										{{ HTML::link('reportes/antropometria/'.Auth::user()->perfiles_usuario_id, "Antropometría" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('reportes/bioquimica/'.Auth::user()->perfiles_usuario_id, "Bioquímica" ) }}
									</li>									
									<li class="divider"></li>
									<li>
										{{ HTML::link('reportes/consumo_alimentos_bares/'.Auth::user()->perfiles_usuario_id, "Valor nutricional - Frecuencia de consumo alimentos en los bares de la Universidad" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('reportes/consumo_alimentos/'.Auth::user()->perfiles_usuario_id, "Valor nutricional - Frecuencia de consumo alimentos en Universidad y alrededores" ) }}
									</li>
									<?php }elseif(Auth::user()->perfiles_usuario_id == "1" || Auth::user()->perfiles_usuario_id == "3") {?>
									<!--REPORTES DE ADMIN Y ENCUESTADORES-->									
									<li>
										{{ HTML::link('reportes/consumo_alimentos_bares/', "Valor nutricional - Frecuencia de consumo alimentos en los bares de la Universidad" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('reportes/consumo_alimentos/', "Valor nutricional - Frecuencia de consumo alimentos en hogar, Universidad y alrededores" ) }}
									</li>
									<li class="divider"></li>									
									<li>
										{{ HTML::link('reportes/antropometria', "Información antropométrica" ) }}
									</li>
									<li class="divider"></li>
									<li>
										{{ HTML::link('reportes/bioquimica', "Información bioquímica" ) }}
									</li><?php }?>
								</ul>
							</li>

							<?php if(Auth::user()->perfiles_usuario_id == "1"){?>
							<li class="dropdown">
								<a class="dropdown-toggle text-white"  data-toggle="dropdown">Administración<b class="caret"></b></a>
								<ul class="dropdown-menu">																	
										<li>
											{{ HTML::link('alimentos', "Gestión de alimentos en hogar, Universidad y alrededores" ) }}											
										</li>
										<li class="divider"></li>
										<li>
											{{ HTML::link('alimentosBares', "Gestión de alimentos en los bares de la Universidad" ) }}											
										</li>										
										<li class="divider"></li>
										<li>
											{{ HTML::link('usuarios', "Gestión de usuarios" ) }}											
										</li>									
								</ul>
							</li>			
							<?php } ?>				
						</ul>					
							<?php }else{ ?>
								<ul class="nav navbar-nav">
									<!--
									<li>
										<a class="text-white" href="/registrar">Registro</a>
									</li>-->
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
                    <p></p>
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
