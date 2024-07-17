<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Star;

class StarController extends Controller
{
    public function getAdd(Request $request)
    {

        $obj = Star::where('model_name', $request->model_name)->where('model_id', $request->model_id)->where('ip', $_SERVER['REMOTE_ADDR'])->first();
        if ($obj) {

            $obj->delete();
        } else {
            $star = new Star;
            $star->model_name = $request->model_name;
            $star->model_id = $request->model_id;
            $star->ip = $_SERVER['REMOTE_ADDR'];
            $star->save();
        }
        return redirect()->back();
    }
    }


