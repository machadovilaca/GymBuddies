<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GYM BUDDIES</title>
        <style type = "text/css">
        @import url('http://fonts.googleapis.com/css?family=Optima');
           
           body {
             margin: 0;
             padding: 0;
             background-attachment: fixed;
             background-size: cover;
            }
            a   {color: white;
                 font-size: 100px;
                 text-decoration:none; 
                 font-family: Marker Felt, fantasy;
                 text-align: center;
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

           h1   {color: blue;}

           
           
                  </style>
        <head/>
    
            
        <body>
                 
                    <div class="content">
                          <div class="title m-b-md">
                               <a href="{{ url('/home') }}" > GYM BUDDIES</a>
                          </div>

                         
                      </div>
                    
                
              
                
            <div style="position: fixed; z-index: -99; top: -10%; left: -12%; width: 100%; height: 100%">
              <iframe frameborder="0" height="120%" width="120%" 
                src="https://www.youtube.com/embed/dy2UQofvwH8?autoplay=1" allowfullscreen loop="true" >
              </iframe>
            </div>
        </body>

</html>
