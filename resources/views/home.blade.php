@extends('layouts.app')

<?php 
use Carbon\Carbon;
use App\CalendarEntry;
 ?>

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

                <p<?php 
                                $bmi = Auth::user()->weight / (Auth::user()->height * Auth::user()->height) * 100*100; 
                                if($bmi > 30 || $bmi < 18.5) echo "><b>BMI:</b><span class='text-danger'>" .$bmi."</span";
                                else if ($bmi > 25) echo "><b>BMI:</b><span class='text-warning'>" .$bmi."</span";
                                else echo "><b>BMI:</b> <span class='text-info'>" .$bmi."</span";
                                ?>  
                          <p>

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
                        <?php 
                        $todays = CalendarEntry::where('user_id','=',Auth::user()->id)->where('date','>=',Carbon::today())->where('date','<',Carbon::tomorrow())->get();
                        if(0<count($todays)) { ?>
                        @foreach($todays as $today)
                        <u>Do: {{$today->title}}</u>
                        @endforeach
                        <?php } else { ?>
                            Nothing scheduled today!
                        <?php } ?> 
                        <p><a href=/calendar>See full month's schedule</a></p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</br>
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
<br>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header"> Developers choice </div>

                <div class="card-body">
               <b> Gain muscle </b>
                        <ul>
                            <a href="https://www.muscleandfitness.com/workouts/workout-routines/gain-10-pounds-muscle-4-weeks-1">
                                <li >Muscle and Fitness </li></a>
                            <a href="https://www.muscleandstrength.com/workouts/10-week-mass-building-program.html"><li> Muscle and Strength</li></a>
                            <a href="https://www.mensfitness.com/training/build-muscle/winter-bulk-how-gain-muscle-4-weeks"><li> Mens Fitness</li></a>
                            <a href="https://www.mensfitness.com/training/build-muscle/skinny-guy-rules-gaining-muscle"><li> Mens Fitness</li></a>
                        </ul>
                    <b> Lose weight </b>
                        <ul>
                            <a href="https://www.mensfitness.com/training/workout-routines/4-week-workout-plan-lose-weight-and-burn-away-belly-fat"><li>Mens Fitness </li></a>
                            <a href="http://www.superskinnyme.com/weight-loss-exercise-plan.html"><li> Super Skinny Me</li></a>
                            <a href="https://www.muscleandfitness.com/workouts/workout-routines/6-week-fat-blast-workout-routine"><li> Muscle and Fitness </li></a>
                            <a href="https://www.muscleandstrength.com/workouts/12-week-fat-destroyer"><li> Muscle and Strength</li></a>
                        </ul>
                    <b> Conditioning  </b>
                        <ul>
                            <a href="https://www.mensfitness.com/training/endurance/metabolic-conditioning-the-key-to-better-performance"><li>Mens Fitness </li></a>
                            <a href="https://www.acefitness.org/education-and-resources/professional/expert-articles/5354/complex-training-strength-and-conditioning-workout-for-athletes"><li> Ace Fitness</li></a>
                            <a href="https://www.muscleandfitness.com/workouts/total-body-exercises/ultimate-conditioning-workout"><li> Muscle and Fitness </li></a>
                            <a href="https://www.muscleandstrength.com/workouts/cardio-conditioning-workouts-fat-burning"><li> Muscle and Strength</li></a>
                        </ul>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
