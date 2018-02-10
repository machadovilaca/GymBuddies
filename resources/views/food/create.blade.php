@extends('layouts.food')

@section('content')
    <form method="POST" action="/food">
        @csrf

        <div class="auxbox">
            <h3 class="auxtext" > Protein </h3>

            <div class="info" id="g1" > 120g </div>
            <div class="slidecontainer">
                <input type="range" min="0" max="400" value="120" class="slider" id="myRange1" name="protein" onChange="range('myRange1','g1')" OnKeyup="range('myRange1','g1')">
            </div>
            
            <h3 class="auxtext" > Fat </h3>
            
            <div class="info" id="g2" >180g </div>
            <div class="slidecontainer">
                <input type="range" min="1" max="200" value="180" class="slider" id="myRange2" name="fat"  onChange="range('myRange2','g2')" OnKeyup="range('myRange2','g2')">
            </div>

            <h3 class="auxtext" > Carbohydrates </h3>

            <div class="info" id = "g3" >330g </div>
            <div class="slidecontainer">
                <input type="range" min="1" max="600" value="330" class="slider" id="myRange3" name="carbohydrates"  onChange="range('myRange3','g3')" OnKeyup="range('myRange3','g3')">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
@endsection
        
