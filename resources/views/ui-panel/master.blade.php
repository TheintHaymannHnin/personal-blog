<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- BOOTSTRAP CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <!-- FONT AWESOME  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
     <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- HEADER SECTION-->
              <div class="header">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                    <img src="images\stitch.jpg" id="headerImg" alt="">
                  </div>
                  <div class="col-md-4">
                    <br><br><br>
                    <p class="hello">HELLO!</p>
                    <p class="itme">IT'S ME</p>
                    <p class="yms">LOVELY STITCH</p>
                    <p class="hc">THE HAPPY CODER</p>
                    <br>
                    <a href="{{url('/posts')}}">
                      <button class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                        Explore My Blogs
                      </button>
                    </a>
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </div>
                  
                <!-- NAVBAR SEXTION -->
                <div class="position-sticky" id="navbar">
                  <a href="{{url('/')}}">HOME</a>
                  
                  <a href="{{url('/posts')}}">BLOGS</a>
                  {{-- <a href="{{('/logout')}}" class="float-right">Logout</a> --}}

                  @if(Auth::check())
                  <a href="" class="float-right"> {{Auth::user()->name}}</a>
                  <a  href="{{ route('logout') }}"  class="float-right"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}<br>
                                        
                                        
                                     </a>
                                    
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                     @else
                                        



                  <a href="{{('/register')}}" class="float-right">Register</a>
                  <a href="{{('/login')}}" class="float-right">Login</a>
                  @endif
                 
                </div>               

                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @yield('content')
                            
                    <div class="row">
                      @foreach($posts as $post)
                      <div class="col-sm-6 col-md-4">
                          <a href="{{url('posts/'.$post->id.'/details')}}">
                              <div class="latest-post">
                              <img src="{{asset('storage/post-images/'.$post->image)}}" alt="">
                                <small>{{date('d-M-Y'),strtotime($post->created_at)}}</small>
                                <p><strong>{{$post->title}}</strong></p>
                                <P>
                                  {{substr($post->content,0,150)}}
                                </P>
                              </div>
                          </a>
                      </div>
                      @endforeach
                      {{-- <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRK2tvT1fAPcQNFpZvDaqmAgxkGCqGWADA0OMwdzULJWRScYI2A&usqp=CAU" alt="">
                                <small>6 October, 2020 </small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" alt="">
                                <small>6 October, 2020</small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQXE_7Go4FovH9bstguTZSXGwPapB5CwcraJtmLQICkJe9weEk&usqp=CAU" alt="">
                                <small>6 October, 2020</small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div>
                      <div class="col-sm-6 col-md-4">
                          <a href="post-details.html">
                              <div class="latest-post">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQK60mFUNV8eXgrHZYzJwIKiYTPPhPW_jqFKlUcEcQGvxrF6F21&usqp=CAU" alt="">
                                <small>6 October, 2020 </small>
                                <p><strong>SOMETHING JUST LIKE THIS WHEN YOU FALL IN LOVE WITH SOMEONE</strong></p>
                                <P>
                                  Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery people scan bar codes with handhelds and workers in the field stay
                                </P>
                              </div>
                          </a>
                      </div> --}}
                    </div>
                        </div>
                    </div>
                </div>

                <!-- FOOTER SECTION  -->
              <div class="footer">
                <div class="row">

                  <div class="col-sm-12 col-md-4 mb-4">
                    <h5>ABOUT THIS WEBSITE</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum excepturi molestiae dolore? Beatae distinctio.
                    </p>
                  </div>

                  <div class="col-sm-12 col-md-4 mb-4">
                    <h5>CONTACT INFO</h5>
                    <span> <i class="fas fa-mobile-alt"></i> 09798059425 </span> <br>
                    <span> <i class="far fa-envelope"></i> stitch@gmail.com </span>
                  </div>

                  <div class="col-sm-12 col-md-4">
                    <h5>FOLLOW ME ON</h5>
                    <a href="" target="_blank">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="" target="_blank">
                    <i class="fab fa-instagram-square"></i>
                   </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" target="_blank">
                      <i class="fab fa-linkedin"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="">
                      <i class="fab fa-twitter-square"></i>
                    </a>
                  </div>

                </div>
              </div>

            </div>
        </div>
    </div>
    <!-- CUSTOMS JS  -->
    <script src="js/main.js"></script>
    <!-- BOOTSTRAP JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>