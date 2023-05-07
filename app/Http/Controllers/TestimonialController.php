<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    public function getTestimonials(){

        $testimonials = Testimonial::orderBy('CreDate', 'desc')->take(3)->get();

        return \view('index', compact('testimonials'));

    }
}
