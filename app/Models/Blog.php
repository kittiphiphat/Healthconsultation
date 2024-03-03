<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'sex', 'phone', 'section', 'respond', 'content', 'status', 'age'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
