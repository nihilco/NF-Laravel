<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tutorial;

class DefaultController extends Controller
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

    //
    public function index()
    {
	$tutorial = Tutorial::latest()->first();
	$posts = Post::latest()->take(3)->get();

        return view('default.index', compact('tutorial', 'posts'));
    }
}
