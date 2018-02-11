@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit</div>

                <div class="card-body">
                    <form method="POST" action="/calendar">
                        @csrf

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{$arg}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="workout" class="col-md-4 col-form-label text-md-right">Workout</label>

                            <div class="col-md-6">
                                <input list="workouts"  type="text" class="form-control" name="workouts" required autofocus>
                                <datalist id="workouts">
                                    <option value="Chest">
                                    <option value="Back">
                                    <option value="Arms">
                                    <option value="Shoulders">
                                    <option value="Legs">
                                    <option value="Abs">
                                    <option value="Cardio">
                                    
                                 </datalist> 
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
