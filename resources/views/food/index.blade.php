@extends('layouts.food')

@section('content')

<form action="/food/create" method="get">

    <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-primary">
                Add new meal
            </button>
        </div>
    </div>

</form>
</br>
            <ul style="color:black;">
                <li>
                    <p>Meal mean:</p>
                    <p>Mean Protein: {{$mean_prot}}</p>
                    <p>Mean Fat: {{$mean_fat}}</p>
                    <p>Mean Carbohydrates: {{$mean_carbo}}</p>
                </li>
            </ul>

                </br>

        <p>Last week consumption:</p>
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


@endsection
        
