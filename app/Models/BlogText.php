<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogText extends Model
{
    use HasFactory;
    protected $fillable = ['blog_id', 'user_id', 'body', 'status'];
    public function pictures(){
        return $this->hasMany(BlogTextPicture::class);
    }
}
