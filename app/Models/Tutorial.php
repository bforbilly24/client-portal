<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tutorial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'author', 'title', 'description', 'url_thumbnail', 'embed_html', 'link', 'duration', 'published_at',
    ];

    protected $hidden = [];
}
