<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller
{
    public function toggleFavorite(Blog $blog)
    {
        $user = Auth::user();
        if ($user->favorites()->where('blog_id', $blog->id)->exists()) {
            $user->favorites()->detach($blog->id);
        } else {
            $user->favorites()->attach($blog->id);
        }

        return back();
    }
}
