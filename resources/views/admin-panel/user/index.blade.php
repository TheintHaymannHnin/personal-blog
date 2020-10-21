@extends('admin-panel.master')
@section('title','user index')
@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-dark">User</h5>
                                @if(Session('successMsg'))
                                <div class="alert alert-success alert-dimissible show fade">
                                <div>{{Session('successMsg')}}</div>
                                <button class="close" data-dismiss="alert">&times;</button>
                                </div> 
                                @endif
                                <table class="table table-bordered table-hover mt-3">
                                    <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->status}}</td>
                                            <td>
                                                <form action="{{url('admin/users/'.$user->id.'/delete')}}" method="POST">
                                                    @csrf
                                                <a href="{{url('admin/users/'.$user->id.'/edit')}}"><button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Edit</button></a>
                                                <button  type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endsection
                