<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::select('title', 'image')->where('status', 1)->get();
        return view('home', compact('sliders'));
    }
}
