<?php

namespace App\Http\Controllers;
use App\Car;
use App\Brand;
use App\Pilot;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        return view('pages.home',compact('cars'));
    }
    public function show($id)
    {
        $pilot = Pilot::findOrFail($id);
        return view('pages.show',compact('pilot'));
    }

    public function form()
    {
        $brands = Brand::all();
        return view('pages.form',compact('brands'));
    }
    public function addCar(Request $request)
    {
        $validateData = $request -> validate([
            'name' => 'required|max:64',
            'model' => 'required|max:48',
            'kw' => 'required',
        ]);
        $brand = Brand::findOrFail($request -> get('brand_id'));
        $car = Car::make($validateData);
        $car ->brand() -> associate($brand) -> save();
        return redirect() -> route('home');
    }
}
