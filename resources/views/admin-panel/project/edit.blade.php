@extends('admin-panel.master')
@section('title','project create')
@section('content')
<div class="card">
    <div class="card-header">
      <h5><b>Project Create Form</b></h5>
    </div>
    <div class="card-body">
        <form action="{{url('admin/projects/'.$project->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for=""><b>Name</b></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" value="{{$project->name ?? old('name')}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                    <label for=""><b>URL</b></label>
                    <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="Enter url" value="{{$project->url ?? old('url')}}">
                    @error('url')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Create</button>
        </form>
      
    </div>
    {{-- <div class="card-footer">
            <button type="submit" class="btn btn-dark">Create</button>
      
    </div> --}}
  </div>
@endsection