<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
        $posts=Post::paginate(8);

        return view("welcome",[
            'posts'=>$posts,
        ]);
    }
}
