<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Certificate extends Model
{
    use Attachable, AsSource;
    public $timestamps = false;
    public $fillable = ['title','image'];
}
