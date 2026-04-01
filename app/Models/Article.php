<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use Attachable, AsSource;
    public $fillable = ['title','content','slug','main_image'];
}
