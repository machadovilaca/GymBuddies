@extends('layouts.food')

@section('content')

<form action="/food/create" method="get" >
 <div style="text-align: right;">
    <div class="form-group row mb-0" >
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-primary">
                Add new meal
            </button>
        </div>
    </div>
</div>
</form>
</br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default" style="font-weight: bold;">
                <div class="card-header">Weakly Consumption Mean</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        
                
                    
                    <p>Mean Protein: {{$mean_prot}}</p>
                    <p>Mean Fat: {{$mean_fat}}</p>
                    <p>Mean Carbohydrates: {{$mean_carbo}}</p>
                
            
                </div>
            </div>
        </div>
    </div>
</div>
                </br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default" style="font-weight: bolder;">
                <div class="card-header">Consumption Report</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

        
        <ul style="color:black;">
        @foreach ($foods as $food)
                <li>
                    <p>{{$food->created_at}}</p>
                    <p>Protein: {{$food->protein}}</p>
                    <p>Fat: {{$food->fat}}</p>
                    <p>Carbohydrates: {{$food->carbohydrates}}</p>
                </li>
        @endforeach
        </ul>
                    </div>
            </div>
        </div>
    </div>
</div>
                
@endsection
