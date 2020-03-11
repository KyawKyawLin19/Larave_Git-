@extends('layout')
@section('content')
	<div class="container">
		<h1>{{$receipe -> name}}</h1>
	<ul>
		<li>{{$receipe -> ingredients}}</li>
		<li>{{$receipe -> categories->name}}</li>
		<a href="/receipe/{{$receipe->id}}/edit">Edit</a>
		<form method="POST" action="/receipe/{{$receipe->id}}">
			{{ method_field("DELETE") }}
			{{ csrf_field() }}
			<button type="submit" class="btn btn-primary">Delete</button>
		</form>
	</ul>
	</div>
@endsection