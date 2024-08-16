<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index( Request $request )
    {
        $sliders = Slider::all();
        return view('welcome', compact('sliders'));
    }
}
