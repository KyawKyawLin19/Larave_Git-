@extends('layouts.app')
@section('content')
	

	<div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Responsive Hover Table</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Created Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        
                                        	@foreach($category as $data)
				
										<tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->description}}</td>
                                            <td><span class="label label-success label-lg">{{$data->created_at}}</span></td>
                                            <td>
                                                <a class="btn btn-app" href="/category/{{$data->id}}/edit">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <form method="POST" action="/category/{{$data->id}}">
                                                    {{ method_field("DELETE") }}
                                                    {{ csrf_field() }}
                                                <!-- <button type="submit">Delete</button> -->
                                                <button type="submit" class="btn btn-app"><i class="fa fa-times-circle"></i>Delete</button>
                                                </form>
                                                
                                            </td>
										</tr>
                                            @endforeach
                                    </tbody></table>
                                    {{$category->links()}}
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
@endsection
