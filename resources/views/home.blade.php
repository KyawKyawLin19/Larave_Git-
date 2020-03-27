@extends('layouts.app')
@section('content')
<div class="container-fluid">
    @if (session("message"))
        <div class="alert alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> 
            {{session("message")}}
        </div>
    @endif
    @if(session("message_update"))
        <div class="alert alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> 
            {{session("message_update")}}
        </div>
    @elseif(session("message_delete"))
            <div class="alert alert-info alert-dismissable">
                <i class="fa fa-info"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Alert!</b> 
                {{session("message_delete")}}
            </div>
    @endif
    <div class="row justify-content-center">
        @foreach($data as $value)
       <div class="col-md-4">
           <div class="box box-solid box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$value->name}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p>Category: {{$value->categories->name}}</p>
                    <p>Ingredients: {{$value->ingredients}}</p>
                    <p>Description 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    </div>
                <!-- /.box-body -->
                <div class="box-footer">
                
                    <a href="/receipe/{{$value->id}}/edit" style="float:left;margin-right: 20px;"><button class="btn btn-primary">Edit</button></a>
                    <form method="POST" action="/receipe/{{$value->id}}">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                    <!-- <button type="submit">Delete</button> -->
                    <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                </div>
                <!-- box-footer -->
            </div>
            <!-- /.box -->
       </div>
       @endforeach
    </div>
       {{$data->links()}}
</div>
@endsection
