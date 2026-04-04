<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\MeditationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('practice', [HomeController::class, 'practice'])->name('practice');
Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::get('meditations', [MeditationController::class, 'index'])->name('meditations');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('reviews', [ReviewsController::class, 'index'])->name('reviews');
Route::get('booking', [BookingController::class, 'index'])->name('booking');
Route::post('booking', [BookingController::class, 'makeBooking'])->name('make-booking');
