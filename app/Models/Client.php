<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravelista\Comments\Commentable;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Commentable;


    protected $fillable = [
        'name', 'slug', 'password', 'photo',
    ];

    protected $hidden = [];

    public function projects()
    {
        return $this->hasMany(Project::class, 'clients_id', 'id');
    }
}
