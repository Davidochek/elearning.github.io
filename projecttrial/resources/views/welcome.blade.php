            <!DOCTYPE html>
            <html lang="{{ app()->getLocale() }}">
            <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">

              <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
              <link href="{{ asset('css/app.css') }}" rel="stylesheet">
              <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
              <script src="/js/bootstrap.js"></script>
              <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
              <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

              <!-- CSRF Token -->
              <meta name="csrf-token" content="{{ csrf_token() }}">

              <title>{{ config('app.name', 'Laravel') }}</title>

              <!-- Styles -->
              <link href="{{ asset('css/app.css') }}" rel="stylesheet">
              <style>
              .nav{
                background-color: #EE352E; 
              }

              .nav > li {
                display: inline-block;
              }
              .nav > li + li {
                margin-left: 20px;
              }
              .nav > li > a {
                padding-right: 0;
                padding-left: 0;
                font-size: 16px;
                font-weight: bold;
                color: grey;
                color: rgba(255,255,255,.95);
                border-bottom: 2px solid transparent;
              }
              .nav > li > a:hover {
                color: #EE352E;
              }
              .welcome{
                padding-right: 40px;
                padding-left: 40px;
                padding-top: 40px;
              }
              @media screen and (max-width: 800px) and (min-width: 50px ){
                .images{
                  height: 500px;
                }
              }
              .item{
                width: 100%;
                height: 172px;
              }
              .carousel-caption{
                top: 0;
                bottom: auto;
              }
              #navigator{
                z-index: 100;
                position: relative;
                display: block;
              }
            </style>    
          </head>
          <body>
            <div id="myModal" class="modal fade">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#EE352E; text-shadow: none;">Select to Register</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-2">
                      </div>
                      <div class="col-md-4">
                       <p><a class="btn btn-lg btn-success" href="{{ route('register')}}" style="text-shadow: none;"><i class="fa fa-graduation-cap"></i>Student Register</a></p> 
                     </div>
                     <div class="col-md-4">
                       <p><a class="btn btn-lg btn-success" href="{{ url('teacher/register')}}";><i class="fa fa-briefcase"></i>Teacher Register</a></p>
                     </div>
                     <div class="col-md-2">
                     </div>
                   </div>
                 </div>
                 <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div id="myModal1" class="modal fade">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="color:#EE352E; text-shadow: none;">Select to Login</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                     <p><a class="btn btn-lg btn-success" href="{{ route('login') }}" style="text-shadow: none;"><i class="fa fa-graduation-cap"></i>Student login</a></p>
                   </div>
                   <div class="col-md-4">
                     <div class="col-md-2"></div>     
                     <p><a class="btn btn-lg btn-success" href="{{ route('teacher') }}";><i class="fa fa-briefcase"></i>Teacher Login</a></p>
                   </div>
                 </div>
               </div>
               <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="{{ asset('images/newfinallogo.png') }}" class="img-responsive" style="background-color:#EE352E;">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center" >
           <ul class="nav">
            <li>
              <a href="#"><i class="fa fa-bolt fa-lg" aria-hidden="true">Features</i></a>
            </li>
            <li>
              <a class="nav-link" href="#"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>About Us</a>
            </li>
            <li>
              <a class="nav-link" href="/contact"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>Contact Us</a>
            </li>
            <li>
              <a class="nav-link" href="/"><i class="fa fa-home fa-lg" aria-hidden="true"></i>Main Site<span class="sr-only">(current)</span></a>
            </li>

            @if (Route::has('login'))
            <li>
              @auth
              <a class="nav-link" href="{{ url('/home') }}"><i class="fa fa-home fa-lg" aria-hidden="true">Home</i></a>
            </li>
            <li>
              @else
              <a href="" data-toggle="modal" data-target="#myModal1"><i class="fa fa-sign-in"></i>Login</a>
            </li>
            <li>
              <a href="" data-toggle="modal" data-target="#myModal"> <i class="fa fa-user-plus"></i>Register</a>
            </li>
            @endauth
            @endif
          </ul>
        </div>     
      </div>
      <div class="container">
        <div class="row">
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 style="background-color: black; padding-top: 10px; padding-bottom: 10px; color: white;">Maasai Mara University Online Learning</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <img src="{{ asset('images/classroom-1761864_1920.jpg') }}" class="images" alt=""  width="96%" height="320px" style="opacity: 0.2; position: absolute; z-index: 0; ">
            <div class="welcome text-center">
              <h1 class="cover-heading">Learn Virtually Everywhere.</h1>
              <p class="lead">This is the place where communication is enhanced between instructors and students, and among students. Place where delivery of lectures is enhanced and at any time there is asynchronous access to course materials.</p>
              <div id="navigator">
               <a href="{{ route('login') }}" class="btn btn-success">Learn</a>
             </div>
           </div>
           <br>
           <br>
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <img src="{{ asset('images/library.jpg') }}" alt="">
                <div class="carousel-caption">
                  <p>Meet your able teacher and share with your students</p>
                </div>
              </div>
              <div class="item">
                <img src="{{ asset('images/learn-868815_1920.jpg') }}" alt="">
                <div class="carousel-caption">
                  <p>Learn together, we grow together.</p>
                </div>
              </div>

              <div class="item">
                <img src="{{ asset('images/person-1990906_1920.jpg') }}" alt="">
                <div class="carousel-caption">
                  <p>Learn virtually everywhere</p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class=" col-md-offset-1 col-md-4">
          <h2>welcome To MMU</h2>
          <img src="{{ asset('images/learn-868813_1920.png') }}" alt="" class="img-responsive" width="100%">
          <p class="lead">where it enhances the quality and reach of your teaching, and reduce the time spent on administration. It can enable every learner to achieve his or her potential, and help to build an educational workforce empowered to change. It makes possible a truly ambitious education system for a future learning society.</p>
        </div>
      </div>   
    </div> 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
  </html>