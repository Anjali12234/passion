<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        return view('welcome',compact('sliders','about'));
    }

}
