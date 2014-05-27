@extends('layouts.default')
	
@section('content')
	
<div class="col-lg-8">
	
    <!-- the actual blog post: title/author/date/content -->
    <h1>Informacion Personal</h1>
    <hr>
    
			<div class="col row">
				
			
				<div class="col-md-4 col-lg-8" >
					<p>
						<strong>Email:</strong>
						{{ $user->email }}
					</p>
				</div>
				
				
				
		</div>

</div>
	
@stop
	
	