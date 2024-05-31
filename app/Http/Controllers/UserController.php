<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;

class  UserController extends Controller
{
    public function getIndex()
    {
        return UserResource::collection(User::all());
//return response()->json(User::all());
//        dd(User::all());
    }

    public function getOne(User $user){
        return new UserResource($user);
    }
}
