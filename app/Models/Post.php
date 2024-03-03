<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\RelatedModel;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'sex', 'phone', 'section', 'respond', 'content', 'role', 'status', 'age'];

    public function Blogs()
    {
        return $this->belongsToMany(Blog::class);
    }


}
