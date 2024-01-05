<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Staff;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::take(6)->where('status', 1)->get();
        $staffs = Staff::take(4)->where('status', 1)->get();
        $testimonials = Testimonial::all();
        return view('welcome', compact('sliders', 'about', 'services', 'staffs','testimonials'));
    }
}
