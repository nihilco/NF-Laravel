<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Thread;
use App\Models\User;
use App\Filters\ThreadFilters;
use Illuminate\Http\Request;

class ThreadsController extends Controller
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
    public function index(ThreadFilters $filters)
    {
        //
	$threads = Thread::filter($filters)->get();

	if(request()->wantsJson()) {
	    return $threads;
	}

	return view('threads.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	$forums = Forum::all();
	return view('threads.create', compact('forums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$this->validate(request(), [
	    'forum_id' => 'required',
	    'title' => 'required',
	    'slug' => 'required',
	    'content' => 'required',
	]);

        //
	$thread = new Thread();

	$thread->creator_id = auth()->id();
	$thread->owner_id = auth()->id();
	$thread->forum_id = request('forum_id');
	$thread->title = request('title');
	$thread->slug = request('slug');
	$thread->content = request('content');
	$thread->replies_count = 0;

	$thread->save();

	return redirect($thread->path())
	    ->with('flash', 'Your thread has been published!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
	return view('threads.show', [
	    'thread' => $thread->append(['class', 'isFollowing']),
	]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
	return view('thread.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
	//
	$this->authorize('delete', $thread);

        //
	$thread->delete();

	if(request()->wantsJson()) {
	    return response([], 204);
	}

	return redirect('/forums');
    }
}
