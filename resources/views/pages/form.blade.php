@extends('layouts.main')
@section('content')
    <form action="{{Route('addCar')}}" method="post">

        @csrf
        @method('post')

        <div>
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="model">MODEL</label>
            <input type="text" name="model" id="model" required>
        </div>

        <div>
            <label for="kw">KW</label>
            <input type="number" name="kw" id="kw" required>
        </div>

        <div>
            <label for="brand_id">BRAND</label>
            <select name="brand_id" id="brand_id" required>
                @foreach ($brands as $brand)
                <option value="null" selected disabled>Select brand</option>
                    <option value="{{$brand->id}}">{{$brand->name}} ({{$brand->nationality}})</option>
                @endforeach
            </select>    
        </div>

        <div>
            <label for="pilot_id[]">PILOT</label>
            <select name="pilot_id[]" id="pilot_id[]" multiple>
                @foreach ($pilots as $pilot)
                    <option value="{{$pilot->id}}">{{$pilot->name}} {{$pilot->lastname}}</option>
                @endforeach
            </select>    
        </div>

        <button type="submit">Invia</button>

    </form>
@endsection