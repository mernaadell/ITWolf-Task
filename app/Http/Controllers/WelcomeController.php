<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
        $posts = Post::paginate(8);

        $categories = Category::all();

        return view("welcome", [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    function filter(Request $request)
    {
        $posts = Category::where("id", "$request->category")->first()->posts()->paginate(8);

        $categories = Category::all();

        return view("welcome", [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    function search(Request $request)
    {
        $posts = Post::where("title", "like", "%" . $request->title . "%")->paginate(8);

        $categories = Category::all();

        return view("welcome", [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
