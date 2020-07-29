<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($user_id)
    {
        $posts=Post::orderBy('created_at','desc')->where('user_id',$user_id);
        return PostResource::collection($posts);
    }

}
