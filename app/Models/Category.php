<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'thumbnail', 'status'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
