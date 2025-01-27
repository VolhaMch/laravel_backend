<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['name', 'user_id', 'description_small', 'description', 'status', 'picture', 'tags', 'minutes', 'posted', 'content_1', 'content_2', 'content_3', 'content_4'];
    public function texts(){
        return $this->hasMany(BlogText::class);
    }
    public function stars(){
        return $this->hasMany(Star::class, 'model_id');
    }
    public function users() {
        return $this->belongsToMany(User::class, 'user_marked_blogs');
    }
    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
