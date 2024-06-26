<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenGraph extends Model
{
    use HasFactory;

    protected $fillable = [
        'og_type',
        'og_title',
        'og_url',
        'og_image',
        'og_descriptioon',
        'og_plural_title',
        'url',
        'user_id',
        'status',
    ];
}
