@extends('layouts.food')

@section('content')
    <form method="POST" action="/calendar">
        @csrf

        

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
@endsection
        
