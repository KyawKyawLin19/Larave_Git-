@extends('layout')
@section('content')
	<div class="container">
		<h2>Home Page</h2>
		<a href="/receipe/create"><button class="btn btn-primary">Create Receipe</button></a>

		@foreach($data as $value)
		 <a href="receipe/{{$value->id}}"><li>{{$value->name}}</li></a>
		 <hr>
		@endforeach
		
	</div>
@endsection