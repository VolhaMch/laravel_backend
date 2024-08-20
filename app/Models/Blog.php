<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['name', 'user_id', 'description_small', 'description', 'status', 'picture', 'tags', 'minutes', 'posted'];
    public function texts(){
        return $this->hasMany(BlogText::class);
    }
    public function stars(){
        return $this->hasMany(Star::class, 'model_id');
    }
}
