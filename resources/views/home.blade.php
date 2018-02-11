@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                <p><b>Name:</b> {{ Auth::user()->name }}<p>

                <p><b>Age:</b> {{ Auth::user()->age }}<p>

                <p><b>Height:</b> {{ Auth::user()->height }}<p>

                <p><b>Weight:</b> {{ Auth::user()->weight }}<p>

                
<div>

                
                        
                <a href=/edit>Edit</a>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
    
<br>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header"> Today's work</div>

                <div class="card-body">
               
                    </br>
                        <div>   
                        Se a data do dia for a mesma de um treino da base dados devera aparecer aqui
                        <?php if(0<count(CalendarEntry::where('date','<',Carbon::now()->subDays(1)))) { ?>
                        Cao
                        <?php } else { ?>
                        Gato
                        <?php } ?> 
                        <p><a href=/calendar>See full week's schedule</a></p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
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
                    <a href=/food>Sea Full Report</a>
                
            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header"> Developers choice </div>

                <div class="card-body">
               
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
