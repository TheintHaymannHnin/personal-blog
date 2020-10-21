@extends('admin-panel.master')
@section('title','category index')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
               
      <h5><b>Category Index</b></h5>
     
    </div>
    </div>
    <div class="card-body">
            @if(Session('successMsg'))
            <div class="alert alert-success alert-dimissible show fade">
            <div>{{Session('successMsg')}}</div>
            <button class="close" data-dismiss="alert">&times;</button>
            </div> 
            @endif
            <a href="{{url('admin/categories/create')}}"> <button class="btn btn-success btn-sm float-right mb-3">Add New</button></a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                   
                    <td>
                        <form action="{{url('admin/categories/'.$category->id)}}" method="POST">
                            @csrf 
                            @method('DELETE')
                        <a href="{{url('admin/categories/'.$category->id.'/edit ')}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    
  </div>
@endsection