<?php

namespace App\Http\Controllers;

use App\Models\Meditation;
use Illuminate\Http\Request;

class MeditationController extends Controller
{
    function index(){
        $meditations = Meditation::query()->orderBy('order')->get();
        return view('meditations', ['meditations' => $meditations]);
    }
}
