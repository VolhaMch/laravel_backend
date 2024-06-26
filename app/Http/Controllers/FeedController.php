<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;


class FeedController extends Controller
{
   public function getIndex(){
       $feeds = Feed::orderBy('id', 'DESC')->simplePaginate(100);
       return view('templates.feed', compact('feeds'));
   }
}
