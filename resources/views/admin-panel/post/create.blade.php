@extends('admin-panel.master')
@section('title','post create')
@section('content')
<div class="card">
    <div class="card-header">
      <h5><b>Post Create Form</b></h5>
    </div>
    <div class="card-body">
        <form action="{{url('admin/posts')}}" method="POST" enctype="multipart/form-data">
            @csrf  
            {{-- category --}}
            <div class="form-group">
                    <label for=""><b>Category</b></label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- image --}}
            <div class="form-group">
                <label for=""><b>Image</b></label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
               
            </div> 
            {{-- title --}}
            <div class="form-group">
                    <label for=""><b>Title</b></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" value="{{old('title')}}">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{-- content --}}
                <div class="form-group">
                        <label for=""><b>Content</b></label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Enter content" id="" rows="3">{{old('content')}}</textarea>
                        @error('content')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
            <button type="submit" class="btn btn-dark">Create</button>
            
   
  </div>
@endsection