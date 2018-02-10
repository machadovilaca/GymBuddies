<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GYM BUDDIES</title>
        <style >
        @import url('http://fonts.googleapis.com/css?family=Oswald');
           
           body {
             margin: 0;
             padding: 0;
             background-attachment: fixed;
             background-size: cover;
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
           
           <!-- Fonts -->
                  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

                  <!-- Styles -->
                  
                      html, body {
                          background-color: #fff;
                          color: #636b6f;
                          font-family: 'Raleway', sans-serif;
                          font-weight: 100;
                          height: 100vh;
                          margin: 0;
                      }
                      .full-height {
                          height: 100vh;
                      }
                      .flex-center {
                          align-items: center;
                          display: flex;
                          justify-content: center;
                      }
                      .position-ref {
                          position: relative;
                      }
                      .top-right {
                          position: absolute;
                          right: 10px;
                          top: 18px;
                      }
                      .content {
                          text-align: center;
                      }
                      .title {
                          font-size: 84px;
                      }
                      .links > a {
                          color: #636b6f;
                          padding: 0 25px;
                          font-size: 12px;
                          font-weight: 600;
                          letter-spacing: .1rem;
                          text-decoration: none;
                          text-transform: uppercase;
                      }
                      .m-b-md {
                          margin-bottom: 30px;
                      }
                  </style>
              </head>
              <body>
                  <div class="flex-center position-ref full-height">
                      @if (Route::has('login'))
                          <div class="top-right links">
                              @auth
                                  <a href="{{ url('/home') }}">Home</a>
                              @else
                                  <a href="{{ route('login') }}">Login</a>
                                  <a href="{{ route('register') }}">Register</a>
                              @endauth
                          </div>
                      @endif

                      <div class="content">
                          <div class="title m-b-md">
                              GYM BUDDIES
                          </div>

                         
                      </div>
                  </div>
              </body>


    </head>
   
    <body>
        <div style="position: fixed; z-index: -99; top: -10%; left: -12%; width: 100%; height: 100%">
              <iframe frameborder="0" height="120%" width="120%" 
                src="https://www.youtube.com/embed/dy2UQofvwH8?autoplay=1" allowfullscreen>
              </iframe>

         </div>
    </body>
    
</html>
