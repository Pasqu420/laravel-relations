@extends('layouts.main')
@section('content')
    <form action="#" method="post">

        @csrf
        @method('post')

        <div>
            <label for="name">NAME</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="model">MODEL</label>
            <input type="text" name="model" id="model">
        </div>

        <div>
            <label for="kw">KW</label>
            <input type="number" name="kw" id="kw">
        </div>

        <div>
            <label for="brand">BRAND</label>
            <select name="brand" id="brand">
                @foreach ($brands as $brand)
                    <option value="{{$brand->name}}">{{$brand->name}}</option>
                @endforeach
            </select>    
        </div>

        <button type="submit">Invia</button>

    </form>
@endsection