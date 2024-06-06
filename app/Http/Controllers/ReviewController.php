<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\Auth;
use Illuminate\Support\Facades\App;

class ReviewController extends Controller
{
    public function getIndex(){

        $reviews = Review::orderBy('id', 'DESC')->where('preferred', 1)->simplePaginate(33);
        return view('review', compact('reviews'));
 }
    public function postIndex(Sponsor $sponsor, Request $request)
    {
        $request['user_id'] = Auth::guest() ? 0 : Auth::user()->id;
        $request['sponsor_id'] = $sponsor->id;
        Review::create($request->all());
        $request->session()->flash('status', 'Your message has been received. After verification it will be posted on the website');
        return redirect()->back();
    }
}
