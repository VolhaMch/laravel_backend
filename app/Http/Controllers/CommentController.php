<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getIndex(){

        $comments = Comment::where('preferred', 1)->orderBy('id', 'DESC')->simplePaginate(33);
        return view('comment', compact('comments'));
    }
    public function postIndex(Request $request)
    {


        Comment::create($request->all());
        $request->session()->flash('status', 'Your comment has been shared.');
        return redirect()->back();
    }
}
