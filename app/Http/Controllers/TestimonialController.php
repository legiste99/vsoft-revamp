<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    public function getTestimonials(){

        $testimonials = Testimonial::all();

        return \view('index', compact('testimonials'));

    }
}
