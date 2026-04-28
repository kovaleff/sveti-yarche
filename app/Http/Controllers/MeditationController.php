<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Meditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MeditationController extends Controller
{
    function index(){
        $meditations = Meditation::query()->orderBy('order')->get();
        $article = Article::query()->where('slug', 'meditation')->firstOrFail();
        return view('meditations', ['meditations' => $meditations, 'article' => $article]);
    }
}
