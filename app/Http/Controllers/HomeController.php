<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $mainArticle = Article::query()->where('slug', 'main')->firstOrFail();
        return view('index', ['main' => $mainArticle]);
    }
    function practice(){
        return view('practice');
    }
}
