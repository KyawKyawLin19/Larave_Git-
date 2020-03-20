@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

	            <div class="container">
					<h2>Home Page</h2>
					<a href="/receipe/create"><button class="btn btn-primary">Create Receipe</button></a>
                    @if(session("message"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session("message")}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif(session("message_delete"))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session("message_delete")}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
					@foreach($data as $value)
			 		<a href="receipe/{{$value->id}}"><li>{{$value->name}}</li></a>
			 		<hr>
					@endforeach
				</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
