@extends('layouts.main')
@section('content')
    <h2>
        Car : 
    </h2>
    <div>
        <h3>
            PILOT : {{$pilot->name}} {{$pilot->lastname}}
        </h3>
        <div>
            @foreach ($pilot->cars as $car)
            <b>
                CARS : 
            </b>
                <p>
                    NAME : {{$car->name}} , MODEL : ({{$car->model}})
                     BRAND : {{$car->brand->name}} , NATIONALITY : {{$car->brand->nationality}}
                </p>
            @endforeach
        </div>
    </div>
@endsection