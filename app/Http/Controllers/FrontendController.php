<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Course;
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
        $courses = Course::all();
        return view('frontend.index', compact('sliders', 'about', 'services', 'staffs', 'testimonials', 'courses'));
    }

    public function about()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    }

    public function course()
    {
        $courses = Course::all();
        return view('frontend.course.course', compact('courses'));
    }

    public function courseDetail(Course $course)
    {
        return view('frontend.course.courseDetail', compact('course'));
    }
}
