<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $casts = [
        'preferred' => 'boolean',
    ];
    public $fillable = ['post_id', 'user_id', 'preferred', 'message'];
}
