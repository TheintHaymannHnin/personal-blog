@extends('admin-panel.master')
@section('title','post edit')
@section('content')
<div class="card">
    <div class="card-header">
      <h5><b>Post update Form</b></h5>
    </div>
    <div class="card-body">
        <form action="{{url('admin/posts/'.$post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
           
             <div class="form-group">
                    <label for=""><b>Category</b></label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" 
                            {{$post->category_id == $category->id ?
                              'selected' :''}}
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- image --}}
            <div class="form-group">
                <label for=""><b>Image</b></label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"><br>
                <img src="{{asset('storage/post-images/'.$post->image)}}" alt="" width="100px"> 
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
               
            </div> 
            {{-- title --}}
            <div class="form-group">
                    <label for=""><b>Title</b></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" value="{{$post->title ?? old('title')}}">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{-- content --}}
                <div class="form-group">
                        <label for=""><b>Content</b></label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Enter content" id="" rows="3">{{$post->content ?? old('content')}}</textarea>
                        @error('content')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            <button type="submit" class="btn btn-dark">Update</button>
        </form>
            
   
  </div>
@endsection