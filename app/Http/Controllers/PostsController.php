<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Filters\PostFilters;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostFilters $filters)
    {
        $posts = Post::filter($filters)->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(), [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);
        
        //
        $post = new Post();
        
        $post->creator_id = auth()->id();
        $post->owner_id = auth()->id();
        $post->website_id = config('view.website_id');
        $post->title = request('title');
        $post->slug = request('slug');
        $post->description = request('description');
        $post->content = request('content');
        $post->published_at = \Carbon\Carbon::now()->toDateTimeString();
        
        $post->save();
        
        return redirect('/posts');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $this->authorize('delete', $post);
        
        //
        $post->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/posts');
    }
}
