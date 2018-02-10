<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Food info</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .auxbox {
                padding: 40px
            }

            .auxtext {
                margin-left: 20px
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

            .slidecontainer {
                width: 100%; /* Width of the outside container */
            }

            /* The slider itself */
            .slider {
                -webkit-appearance: none;  /* Override default CSS styles */
                appearance: none;
                width: 35%; /* Full-width */
                height: 35px; /* Specified height */
                background: #d3d3d3; /* Grey background */
                outline: none; /* Remove outline */
                opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
                -webkit-transition: .2s; /* 0.2 seconds transition on hover */
                transition: opacity .2s;
            }

            /* Mouse-over effects */
            .slider:hover {
                opacity: 1; /* Fully shown on mouse-over */
            }

            /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */ 
            .slider::-webkit-slider-thumb {
                -webkit-appearance: none; /* Override default look */
                appearance: none;
                width: 30px; /* Set a specific slider handle width */
                height: 30px; /* Slider handle height */
                background: #ff3300; /* Green background */
                cursor: pointer; /* Cursor on hover */
            }

            .slider::-moz-range-thumb {
            width: 25px; /* Set a specific slider handle width */
            height: 25px; /* Slider handle height */
            background: #ff3300; /* Green background */
            cursor: pointer; /* Cursor on hover */
            }
            
            .button {
            align-content: center;
            background-color:#ff3300; /* Green */
            border: none;
            color: white;
            opacity:0.8;
            width: 35%;
            height: 60px;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            }

            .button:hover {
                opacity:1;
            }
            .info{
                text-align: auto;
            }

        </style>
        <script> 
            //var slider = document.getElementById("myRange");
            //var output = document.getElementById("demo");
            // output.innerHTML = slider.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            //slider.oninput = function() {
            //output.innerHTML = this.value;
            //}

            function range( pname , labeln )
            {
                var p = document.getElementById(pname) ; 
                var output = document.getElementById(labeln);  
                output.innerHTML = p.value + "g";
            }
       
        </script>
    </head>
    <body>
        <div class="auxbox">
            <h3 class="auxtext" > Protein </h3>

            <div class="info" id="g1" > 120g </div>
            <div class="slidecontainer">
                <input type="range" min="0" max="400" value="120" class="slider" id="myRange1" onChange="range('myRange1','g1')" OnKeyup="range('myRange1','g1')">
            </div>
            
            <h3 class="auxtext" > Fat </h3>
            
            <div class="info" id="g2" >180g </div>
            <div class="slidecontainer">
                <input type="range" min="1" max="200" value="180" class="slider" id="myRange2"  onChange="range('myRange2','g2')" OnKeyup="range('myRange2','g2')">
            </div>

            <h3 class="auxtext" > Carbohydrates </h3>

            <div class="info" id = "g3" >330g </div>
            <div class="slidecontainer">
                <input type="range" min="1" max="600" value="330" class="slider" id="myRange3"  onChange="range('myRange3','g3')" OnKeyup="range('myRange3','g3')">
            </div>

            <div class="button" > Save </div>

        </div>
        
    </body>
</html>
