@extends('admin-panel.master')
@section('title','user edit')
@section('content')
<h5><b>User Edit Page</b></h5>
<br>
<form action="{{url('admin/users/'.$user->id.'/update')}}" method="POST">
    @csrf 
    <div class="form-group">
        <label for=""><b>Name</b></label>
        <input type="text" class="form-control" name="name" value={{$user->name}}>
    </div>
    <div class="form-group">
            <label for=""><b>Email</b></label>
            <input type="email" class="form-control" name="email" value={{$user->email}}>
        </div>
        <div class="form-group">
            <label for=""><b>Status</b></label>
            <select name="status" id="" class="form-control">
                <option value="">Select Status</option>
                <option value="admin"
                @if($user->status =='admin')selected @endif
                >Admin</option>
                <option value="user"
                @if($user->status =='user')selected @endif
                >User</option>
            </select>

        </div> 
        <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection