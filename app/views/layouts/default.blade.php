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
		{{ HTML::style('css/app.css') }}

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
					 <a class="navbar-brand" href="/">Nombre del sitio</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav">
						<?php if (Auth::check()){
							?>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle text-white"  data-toggle="dropdown">{{Str::title(Auth::user() -> name) }} 
								<b class="caret"></b></a> 
								<ul class="dropdown-menu">
									<li>
										{{ HTML::link('/profile', "Profile" ) }}
									</li>
									<li>
										{{ HTML::linkRoute('entries.index', "My Entries" ) }}
									</li>
									<li >
										{{ HTML::linkRoute('entries.create', "Create an Entry" ) }}
									</li>
									<li class="divider"></li>
									<li>
										<a href="/logout">Logout</a>
									</li>
								</ul>
							</li>
							
						</ul>
						
						
							<?php }else{ ?>
								<ul class="nav navbar-nav right-menu">
									<li>
										<a class="text-white" href="/register">Registro</a>
									</li>
									<li>
										<a class="text-white" href="/login">Login</a>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle text-white"  data-toggle="dropdown">Administración<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li>
												<a href="/logout">Ingresar Grupos de Alimentos</a>
											</li>
										</ul>
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
		{{ HTML::script('/js/jquery/validate/jquery.validate.min.js') }}
		{{ HTML::script('/js/jquery/validate/messages_es.js') }}
		{{ HTML::script('/js/jquery/jquery.cookie.js') }}
		{{ HTML::script('/js/app.js') }}

	</body>
</html>
