<?php

namespace App\Http\Controllers;

use App\Models\NewsArticles;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function getData(){

        $testimonials = Testimonial::orderBy('CreDate', 'desc')->take(3)->get();
        $articles = NewsArticles::orderBy('PublishDate', 'desc')->take(3)->get();

        return \view('index', compact('testimonials', 'articles'));

    }

    public function getAllArticles(){

        $allArticles = NewsArticles::paginate(10);

        return \view('articles.all_news', compact('allArticles'));

    }


}
