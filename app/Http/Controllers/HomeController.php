<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $mainArticle = Article::query()->where('slug', 'main')->firstOrFail();
        $firstThreeServices = Service::query()->limit(3)->orderBy('order')->get();
        $reviews = Review::query()->limit(4)->get();
        return view('index', [
            'main' => $mainArticle,
            'services' => $firstThreeServices,
            'reviews' => $reviews,
        ]);
    }
    function practice(){
        return view('practice');
    }
}
