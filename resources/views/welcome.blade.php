<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GymBuddies</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("/w3images/coffeehouse.jpg");
            min-height: 75%;
        }

        .maintit {
            font-size:232px
        }
        #video-background {
            position: fixed;
            right: 0; 
            bottom: 0;
            min-width: 100%; 
            min-height: 100%;
            width: auto; 
            height: auto;
            z-index: -100;
        }
        .thatclass {
            width: 35%;
            
        }

    </style>
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 20px">
                    GymBuddies
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- BUILDING THE ACTUAL THING -->

    <div class="w3-content" style="max-width:1600px">

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-48" style="backgroud-color:#ff3300" >
      <div><h1 style="font-size:4rem"><b>GymBuddies</b></h1></div>
      <h6>The app that won't <span class="w3-tag">make you sweat</span></h6>
    </header>
        <br>
        
        <br>
        <header class="w3-container w3-center w3-white" style="padding:0px">
        <div class=" w3-grayscale" >
            <div class="w3-half" style="content-align:left">
                <img src="photo.jpg"  alt="work" style="width:100%;margin-left=0px" >
            
            </div>
        
        
        <div class="w3-half">
            <div style="padding:2.5rem"> <h5 > 
                    <p>This web app redefines the way you keep track of your workouts and diet.</p>
                    <p>We accomplish that by having a simple user interface that isn't overwhelmingly complex to the more casual user. </p>
            </h5></div>       
        </div>
      </div>
      </header>
      <div style="width:100%;height:200px" ></div>

    
    <!-- BUILDING THE ACTUAL THING -->
    <header class="w3-container w3-center w3-white"  style="margin-bottom:0px">
        <div class=" w3-grayscale" style="height:100px">
            <p style="padding:50px"> This was made by Team8</p>
        </div>
    </header>
</body>
</html>


