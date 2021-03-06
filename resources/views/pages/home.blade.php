@extends('layouts.main')
@section('content')
    <h2>Cars : </h2>
    @foreach ($cars as $car)
        <div class="car">
            <h3>
                NAME : {{$car->name}}
            </h3>
            <p>
                <strong>
                    Model : 
                </strong>
                {{$car->model}}

                (KW:{{$car->kw}})
            </p>
            <p>
                <strong>
                    BRAND : 
                </strong>
                ({{$car->brand->name}})
            </p>
            <div class="pilots">
                @foreach ($car->pilots as $pilot)
                    <h3>
                        <a href="{{Route('show',$pilot->id)}}">
                            PILOT : {{$pilot->name}} {{$pilot->lastname}}
                        </a>
                    </h3>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection