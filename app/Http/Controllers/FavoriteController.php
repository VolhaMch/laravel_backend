<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;


class FavoriteController extends Controller
{
    public function add(Blog $blog)
    {
//       dd('test');
       Auth::user()->favorites()->firstOrCreate([
            'blog_id' => $blog->id,
        ]);

        return back()->with('success', 'Статья добавлена в избранное!');
    }

    public function delete(Blog $blog)
    {
        $favorite = Auth::user()->favorites()->where('blog_id', $blog->id)->first();

        if ($favorite) {
            $favorite->delete();
        }

        return back()->with('success', 'Статья удалена из избранного!');
    }
}
