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
        <script src="{{ asset('js/app.js') }}"></script>
        @section('headSection')
       @show

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MMU Online Learning') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
     ul.social-network {
    list-style: none;
    display: inline;
    margin-left:0 !important;
    padding: 0;
}
ul.social-network li {
    display: inline;
    margin: 0 4px;
}

.social-network a.icoInstagram:hover {
    background-color: #F56505;
}
.social-network a.icoFacebook:hover {
    background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
    background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
    background-color:#BD3518;
}
.social-network a.icoVimeo:hover {
    background-color:#0590B8;
}
.social-network a.icoGithub:hover {
    background-color:#007bb7;
}
.social-network a.icoInstagram:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoGithub:hover i {
    color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
    color:#44BCDD;
}

.social-circle li a {
    display:inline-block;
    position:relative;
    margin:0 auto 0 auto;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    border-radius:50%;
    text-align:center;
    width: 50px;
    height: 50px;
    font-size:20px;
}
.social-circle li i {
    margin:0;
    line-height:50px;
    text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
}
.social-circle i {
    color: #fff;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
}

    </style>
</head>
<body>
    <img src="{{ asset('images/newfinallogo.png') }}" style="background-color:#EE352E; width: 100%;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container" style="background-color: white;">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       Maasai Mara University eLearning
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i>Register</a></li>
                        @else
                        <li>
                                <button class="btn btn-default" aria-haspopup="true" aria-expanded="true">
                                        <a href="/home"><i class="fa fa-dashboard"></i>Dashboard</a>
                                        </button>
                                    </li>
                               <li>
                                <button class="btn btn-default" aria-haspopup="true" aria-expanded="true">
                                        <a href="{{ url('mmublog') }}"><i class="fa fa-archive"></i>MMU Blog</a>
                                        </button>
                                    </li>   
                                <li class="dropdown">                 
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="fa fa-group"></i>
    Class
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/get">View Class</a></li>
    <li><a href="/class">Join Class</a></li>
  </ul>
  </li> <li class="dropdown">                 
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-graduation-cap"></i>
    Student
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Profile</a></li>
    <li><a href="#">Manage Section</a></li>
  </ul>
  </li>
 
  <li class="dropdown">                 
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-briefcase"></i>
    Teacher
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/see">View Teacher</a></li>
  </ul>
  </li>
                            <li class="dropdown">
                                <a class="btn btn-default" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-user"></i>
                                    {{ ucfirst(Auth::user()->name).' '.ucfirst(Auth::user()->lastname) }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
<div id="footer">   
         <div class="nav navbar-inverse">
      <div class="container">
        <p>&copy; All Rights Reserved</p>
         <p>Designed and built with all the love in the world by <a href="#" target="_blank">@Chemochek</a> and Maintained by the <a href="#">MMU core team</a>
            <p style="color: white"><h4 class="text-center">Follow Us on:</h4></p>
      </div>
      <div class="col-md-6 col-md-offset-6">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoGithub" title="Github"><i class="fa fa-github"></i></a></li>
                    </ul>       
        </div>
    </div>
</div>
    </div>
    @section('footerSection')
  @show
</body>
</html>
