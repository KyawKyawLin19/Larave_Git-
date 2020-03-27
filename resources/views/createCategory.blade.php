@extends('layouts.app')
@section('content')
	<div class="container">
		@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif
		<form method="POST" action="/category">
			{{csrf_field()}}
            <div class="row">
                <h1 class="text-red" style="font-family: 'Kaushan Script', cursive;">
                    Add New Category
                </h1>
                <div class="col-md-6">
        			<div class="form-group">
        				<label style="color: white;">Category Name</label>
        				<input type="text" name="name" class="form-control" placeholder="Enter category name" required>
        			</div>
                    <div class="form-group">
                        <label style="color: white;">Description</label>
                        <textarea class="form-control" rows="3" name= "description" placeholder="Enter description..."></textarea>
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        		</div>
            </div>
		</form>
	</div>
@endsection