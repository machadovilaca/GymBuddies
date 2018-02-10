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

                </br>

                <a href=/edit>Edit</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
