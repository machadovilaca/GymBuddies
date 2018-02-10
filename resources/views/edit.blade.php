@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit</div>

                <div class="card-body">
                    <form method="POST" action="/edit">
                        @csrf

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ Auth::user()->age }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">Height</label>

                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control" name="height" value="{{ Auth::user()->height }}"  required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">Weight</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control" name="weight" value="{{ Auth::user()->weight }}"  required autofocus>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
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
