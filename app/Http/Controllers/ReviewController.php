<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;


class ReviewController extends Controller
{
    public function getIndex()
    {

        $reviews = Review::where('preferred', 1)->orderBy('id', 'DESC')->simplePaginate(33);
        $showhide = Review:: where('ip', $_SERVER['REMOTE_ADDR'])->whereDate('created_at', date('Y-m-d'))->first();
        return view('review', compact('reviews', 'showhide'));
    }

    public function postIndex(Request $request)
    {
        $showhide = Review:: where('ip', $_SERVER['REMOTE_ADDR'])->whereDate('created_at', date('Y-m-d'))->first();
        $request['user_id'] = Auth::guest() ? 0 : Auth::user()->id;
        $request['ip'] = $_SERVER['REMOTE_ADDR'];
        if (!$showhide) {
            Review::create($request->all());
        }

        $request->session()->flash('status', 'Your message has been received.');
        return redirect()->back();
    }
}
