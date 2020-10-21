@extends('admin-panel.master')
@section('title','category create')
@section('content')
<div class="card">
    <div class="card-header">
      <h5><b>Category Create Form</b></h5>
    </div>
    <div class="card-body">
        <form action="{{url('admin/categories')}}" method="POST">
            @csrf 
            <div class="form-group">
                <label for=""><b>Name</b></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" value="{{old('name')}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Create</button>
            
    {{-- <div class="card-footer">
            <button type="submit" class="btn btn-dark">Create</button>
      
    </div> --}}
  </div>
@endsection