<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $fillable = ['name', 'user_id', 'description_small', 'description', 'status', 'picture'];
    public function texts(){
        return $this->hasMany(BlogText::class);
    }
}
