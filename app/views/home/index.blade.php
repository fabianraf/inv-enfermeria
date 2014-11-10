@extends('layouts.default')
	
@section('content')

<!-- Success-Messages -->
		@if(isset($message))
		    <div class="alert alert-success">		        
				{{$message}}
		    </div>
		@endif

		@if($errors->any())
			<div class="alert alert-danger alert-block">
				<ul>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
				</ul>
			</div>
		@endif
	
@stop
	
	