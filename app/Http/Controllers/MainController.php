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
}
