@extends('public.public_layout')

@section('content')
<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card mb-12 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="text-success">{{$receipe->created_at->format('l, Fj, Y')}}</p>
              <p class="text-success">{{$receipe->created_at->format('h:i A')}}</p>
              <p class="card-text">{{$receipe->name}}</p>
              <p class="card-text">{{$receipe->categories->name}}</p>
              <p class="card-text">{{$receipe->ingredients}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/">
                    <button type="button" class="btn btn-sm btn-outline-danger">Back</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection




