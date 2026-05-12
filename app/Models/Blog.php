<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'lang',
        'blog_name',
        'blog_slug',
        'blog_content',
        'blog_image',
        'author_id',
    ];
}
