<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Feed extends Model
{
    use HasFactory;

    public function blog(){
        return $this->belongsTo(Blog::class, 'model_id');
}
    public function blog_text(){
        return $this->belongsTo(BlogText::class, 'model_id');
    }
    public function blog_text_picture(){
        return $this->belongsTo(BlogTextPicture::class, 'model_id');
    }
    public function service(){
        return $this->belongsTo(Service::class, 'model_id');
    }
    public function review(){
        return $this->belongsTo(Review::class, 'model_id');
    }
}
