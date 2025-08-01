<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'thumbnail', 'author_id', 'tags'];

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
