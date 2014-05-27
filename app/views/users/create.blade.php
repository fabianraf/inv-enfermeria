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
		{{ HTML::script('js/jquery/jquery-1.11.0.min.js') }}
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
					 <a class="navbar-brand" href="/">PHP Challenge</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav">
						<?php if (Auth::check()){
							?>

							<li >
								<!-- <a href="#">Link</a> -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle text-white"  data-toggle="dropdown">{{Str::title(Auth::user() -> name) }} 
								<b class="caret"></b></a> 
								<ul class="dropdown-menu">
									<li>
										<a href="/perfil">Perfil</a>
									</li>
									<li>
										<a href="/listapublicaciones">Mis Publicaciones</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="/logout">Cerrar sesion</a>
									</li>
								</ul>
							</li>
							
						</ul>
						
						
							<?php }else{ ?>
								<ul class="nav navbar-nav right-menu">
									<li>
										<a class="text-white" href="/register">Register</a>
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
					<div id="messageExplanation" >
						@if ($errors->count() > 0)
							<h3>The following errors prevented the account from being saved:</h3>
							<ul>
					        @foreach($errors->all() as $error)
					            <li>{{ $error }}</li>
					        @endforeach
					    </ul>
						@endif
					</div>
					
						{{ Form::open(['route' => 'users.store', 'class' => "form-horizontal"]) }}
						  <div class="form-group">
						    {{ Form::label('email', 'Email',array('class' => 'col-sm-2 control-label')); }}
						    <div class="col-sm-6">
						      {{ Form::text('email','', array('class' => 'form-control', 'placeholder' => 'email' )); }}
						    </div>
						  </div>
						  
						  <div class="form-group">
						    {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')); }}
						    <div class="col-sm-6">
						    	{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password')); }}  
						    </div>
						  </div>
						  <div class="form-group">
						  	{{ Form::label('password_confirmation','Password Confirmation', array('class' => 'col-sm-2 control-label')); }}
							<div class="col-sm-6">
							  	{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder'=>'password confirmation')); }}  
							</div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">Registrar</button>
						    </div>
						  </div>
						  {{ Form::close() }}
						
						
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Hecho Por Fabian Aguirre R.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
		
		<!-- Scripts are placed here -->

		{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
		{{ HTML::script('js/jquery/validate/jquery.validate.min.js') }}
		{{ HTML::script('js/jquery/validate/messages_es.js') }}
		{{ HTML::script('js/jquery/jquery.cookie.js') }}
		{{ HTML::script('js/app.js') }}

	</body>
</html>
