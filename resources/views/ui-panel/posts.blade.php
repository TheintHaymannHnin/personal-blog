

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
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
                <!-- HEADER -->
              <div class="header">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                    <img src="images/stitch.jpg" id="headerImg" alt="">
                  </div>
                  <div class="col-md-4">
                    <br><br><br>
                    <p class="hello">HELLO!</p>
                    <p class="itme">IT'S ME</p>
                    <p class="yms">STITCH</p>
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
                  
                <!-- NAVBAR  -->
                <div class="position-sticky" id="navbar">
                  <a href="{{url('/')}}">HOME</a>
                  <a href="javascript:void(0)">ABOUT ME</a>
                  <a href="javascript:void(0)">SKILLS</a>
                  <a href="{{url('/posts')}}">BLOGS</a>
                </div>               

                
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                          @foreach($posts as $post)
                           <div class="row">
                               <div class="col-md-12">
                                <div class="post">
                                    <img src="{{'storage/post-images/'.$post->image}}" style="border:1px solid gray; height:350px;" alt="" width="100%">
                                    <br><br>
                                        <h5><strong>{{$post->title}}</strong></h5>
                                    <br>
                                    <p>
                                        {{substr($post->content,0,150)}}
                                    </p>
                                    <a href="{{url('/posts/'.$post->id.'/details')}}">
                                        <button class="btn btn-info">Read  More <i class="fas fa-angle-double-right"></i> </button>
                                    </a>
                                </div>
                              
                               </div>
                               
                               
                           </div>
                           @endforeach
                        </div>
                        <div class="col-md-4">
                            <div class="siderbar">
                                <form action="{{url('/search_posts')}}" method="GET">
                                  @csrf
                                      <div class="input-group">
                                          <input type="text" name="search_data"class="form-control" placeholder="Search">
                                          <button type="submit" class="btn btn-success">
                                               <i class="fa fa-search"></i>
                                          </button>
                                      </div>
                                </form>
                                <hr>
                                <h5>Categories</h5> 
                                @foreach($categories as $category)
                                <ul>
                                  
                                    <li> <a href="{{url('search_posts_by_category/'.$category->id)}}">{{$category->name}}</a> </li>
                                   
                                    
                                </ul>
                                @endforeach
                                
                            </div>
                        </div>
                        
                    </div>
                </div>

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