<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Meditation extends Model
{
    /** @use HasFactory<\Database\Factories\MeditationFactory> */
    use Attachable, AsSource, HasFactory;
    public $timestamps = false;

    public $fillable   = ['title','content','order'];
}
