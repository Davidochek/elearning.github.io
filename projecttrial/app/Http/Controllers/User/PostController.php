<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function posts (Post $post)
    {
        return view('user.posts', compact('post'));
    }
//
}
