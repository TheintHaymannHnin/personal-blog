@extends('admin-panel.master')
@section('title','skill index')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
               
      <h5><b>Skill Index</b></h5>
     
    </div>
    </div>
    <div class="card-body">
            @if(Session('successMsg'))
            <div class="alert alert-success alert-dimissible show fade">
            <div>{{Session('successMsg')}}</div>
            <button class="close" data-dismiss="alert">&times;</button>
            </div> 
            @endif
            <a href="{{url('admin/skills/create')}}"> <button class="btn btn-success btn-sm float-right mb-3">Add New</button></a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Percent</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)
                <tr>
                    <td>{{$skill->id}}</td>
                    <td>{{$skill->name}}</td>
                    <td>{{$skill->percent}}</td>
                    <td>
                        <form action="{{url('admin/skills/'.$skill->id)}}" method="POST">
                            @csrf 
                            @method('DELETE')
                        <a href="{{url('admin/skills/'.$skill->id.'/edit ')}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
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