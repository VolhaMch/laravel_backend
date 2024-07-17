<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;


class FeedController extends Controller
{
   public function getIndex(){

       return view('feed');
   }
}
