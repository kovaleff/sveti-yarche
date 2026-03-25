<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('about', [AboutController::class, 'index'])->name('about');
