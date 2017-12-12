<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Filters\PostFilters;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostFilters $filters)
    {
        //
	$posts = Post::filter($filters)->get();

	return view('blog.index', compact('posts'));
    }
}
