@extends('admin-panel.master')
@section('title','category edit')
@section('content')
<div class="card">
    <div class="card-header">
      <h5><b>Category Update Form</b></h5>
    </div>
    <div class="card-body">
        <form action="{{url('admin/categories/'.$category->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for=""><b>Name</b></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" value="{{$category->name ?? old('name')}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Update</button>
        </form>
            
   
  </div>
@endsection