<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $casts = [
        'preferred' => 'boolean',
    ];
    public $fillable = ['used_id', 'sponsor_id', 'name', 'email', 'preferred', 'message'];
}
