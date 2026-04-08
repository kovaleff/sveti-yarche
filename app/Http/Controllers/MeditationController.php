<?php

namespace App\Http\Controllers;

use App\Models\Meditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MeditationController extends Controller
{
    function index(){
        Log::debug('test');
        $meditations = Meditation::query()->orderBy('order')->get();
        return view('meditations', ['meditations' => $meditations]);
    }
}
