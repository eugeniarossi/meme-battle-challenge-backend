<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    protected $fillable = [
        'author',
        'nsfw',
        'postLink',
        'preview',
        'score',
        'spoiler',
        'subreddit',
        'title',
        'ups',
        'url',
    ];
}
