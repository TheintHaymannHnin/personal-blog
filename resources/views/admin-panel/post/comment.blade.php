@extends('admin-panel.master')
@section('title','post index')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
               
      <h5><b>Comment</b></h5>
     
    </div>
    </div>
    <div class="card-body">
            @if(Session('successMsg'))
            <div class="alert alert-success alert-dimissible show fade">
            <span class="text-success">{{Session('successMsg')}}</span>
            <button class="close" data-dismiss="alert">&times;</button>
            </div> 
            @endif
           
        <table class="table table-bordered table-hover">
            <thead>
              
                <tr>
                        <th>NO.</th>
                    
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
             
            </thead>
            <tbody>
                @if($comments->count()<1)
                <h3 class="text-danger">no comment </h3>
                @else 
                    @foreach($comments as $index=> $comment)
                <tr>
                      <td>{{$index +1}}</td>  
                    <td>{{$comment->text}}</td>
                    
                    <td>
                        <form action="{{url('admin/comment/'.$comment->id.'/show_hide')}}" method="POST">
                            @csrf 
                       
                        @if($comment->status=='show')
                       
                        <button type="submit" class="btn btn-danger btn-sm">Hide</button>
                        @else
                        <button type="submit" class="btn btn-success btn-sm">Show</button>
                        @endif
                        {{-- <button type="submit" class="btn btn-sm {{$comment->status == 'show' ? 'btn-success' :'btn-danger'}}">
                            {{$comment->status == 'show' ? 'Hide':'Show'}}
                        </button>
                            --}}
                        
                        </form> 

                    </td>
                </tr>
                @endforeach
                @endif
              
        </table>
      
    </div>
    
  </div>
 
@endsection

