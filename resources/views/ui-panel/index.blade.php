@extends('ui-panel.master')
@section('title','index')
@section('content')
<!-- ABOUT ME & SKILLS SECTION-->  
<div class="aboutme">
    <div class="row">
      <div class="col-md-5">
        <br>
        <h3 class="text-center">ABOUT ME</h3>
        <br>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
        </p>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugiat soluta consectetur reprehenderit facere, quis error quidem harum quam laborum inventore quasi minima ipsum asperiores laboriosam ipsa enim dolor perferendis.
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="total-project mb-2">
              <i class="fa fa-project-diagram"></i>
              <br>
              <strong>{{count($projects)}}</strong>
              <p class="text-center">Total Projects</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="total-student">
              <i class="fas fa-users"></i>
              <br>
              <strong>2500</strong>
              <p class="text-center">Total Students</p>
            </div>
          </div>
        </div>
      </div>  
      <div class="col-md-7">
        <br>
        <h4 class="text-center">MY SKILLS</h4>
        <br>
        @foreach($skills as $skill)

        <div class="row">
          <div class="col-md-9">
              <div class="progress mt-4" style=" border: 1px solid gray;">
                <div class="progress-bar" style="width:{{$skill->percent}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  {{$skill->percent}}%
                </div>
              </div>
          </div>
          
          <div class="col-md-3">
             {{$skill->name}}
          </div>                            
        </div>
        @endforeach

      </div>
    </div>
  </div>

  <br><br><br>

  <!-- MY PROJECTS SECTION -->
  <h2 class="text-center">MY PROJECTS</h2><br>
  <div class="row">
    @foreach($projects as $project)
      <div class="col-sm-6 col-md-4 mb-2">
      <a href="{{$project->url}}" target="_blank">
            <div class="project-image-div">
              <img src="images\stitch.jpg" class="project-img" alt="">
                <div class="overlay">
                  <div class="text">{{$project->name}}</div>
                </div>
            </div>
          </a>
      </div>
      @endforeach
      {{-- <div class="col-sm-6 col-md-4 mb-2">
          <a href="https://www.youtube.com"  target="_blank">
            <div class="project-image-div">
              <img src="images\stitch.jpg" class="project-img" alt="">
                <div class="overlay">
                  <div class="text">youtube</div>
                </div>
            </div>
          </a>
      </div>
      <div class="col-sm-6 col-md-4 mb-2">
          <a href="https://www.facebook.com"  target="_blank">
            <div class="project-image-div">
              <img src="images\stitch.jpg" class="project-img" alt="">
                <div class="overlay">
                  <div class="text">facebook</div>
                </div>
            </div>
          </a>
      </div> --}}
  </div>

  <br><br><br>
  <!-- LATEST POSTS SECTION  -->
  <h2 class="text-center">LATEST POSTS FROM BLOGS</h2><br>
  <p class="text-center">
    Hey Guys! I warmly welcome you to read some of my blog posts. Here are very interesting and exciting posts you can read that i am supporting for you guys!
  </p>
@endsection