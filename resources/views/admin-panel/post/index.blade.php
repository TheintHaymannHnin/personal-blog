@extends('admin-panel.master')
@section('title','post index')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
               
      <h5><b>Post Index</b></h5>
     
    </div>
    </div>
    <div class="card-body">
            @if(Session('successMsg'))
            <div class="alert alert-success alert-dimissible show fade">
            <span class="text-success">{{Session('successMsg')}}</span>
            <button class="close" data-dismiss="alert">&times;</button>
            </div> 
            @endif
            <a href="{{url('admin/posts/create')}}"> <button class="btn btn-success btn-sm float-right mb-3">Add New</button></a>
        <table class="table table-bordered table-hover">
            <thead>
              
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
             
            </thead>
            <tbody>
                    @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>
                    <img src="{{asset('storage/post-images/'.$post->image)}}" alt="" width="100px">
                    </td>
                    <td>{{$post->title}}</td>
                   <td> <textarea readonly>{{$post->content}}</textarea></td>
                   
                    <td>
                        <form action="{{url('admin/posts/'.$post->id)}}" method="POST">
                            @csrf 
                            @method('DELETE')
                        <a href="{{url('admin/posts/'.$post->id.'/edit ')}}" class="btn btn-success btn-sm "><i class="fa fa-edit"></i> Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
                        <a href="{{url('admin/posts/'.$post->id)}}"class="btn btn-info btn-sm">
                            <i class="fa fa-comments"></i> Comments
                        </a>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{$posts->links()}} --}}
       
      
    </div>
   
    
  </div>
@endsection