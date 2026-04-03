<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function index(){
        $bookingArticle = Article::query()->where('slug', 'booking')->first();
        return view('booking',['bookingArticle' => $bookingArticle]);
    }
}
