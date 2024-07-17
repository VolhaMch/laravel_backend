<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTextPicture extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'user_id', 'blog_text_id', 'position', 'picture'
    ];
    public function blog_text(){
        return $this->belongsTo(BlogText::class);
    }
}

