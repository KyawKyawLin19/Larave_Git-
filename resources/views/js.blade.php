@extends('layout')

@section('title')
	{{$title}}
@endsection

@section('content')
	{{$name}}
	<ul>
	@foreach($data as $value)
		<li>{{$value}}</li>
	@endforeach
	</ul>
@endsection