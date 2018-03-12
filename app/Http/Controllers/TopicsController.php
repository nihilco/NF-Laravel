<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$channels = Channel::all()->load('forums');
        //return view('topics.index', [
        //    'channels' => $channels,
        //]);
        $topics = Topic::all();
        return view('topics.index', [
            'topics' => $topics,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	$channels = Channel::all();
	return view('forums.create', compact('channels'));
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
	    'channel_id' => 'required',
	    'title' => 'required',
	    'slug' => 'required',
	    'description' => 'required',
	]);

	$forum = new Forum();

	$forum->creator_id = auth()->id();
	$forum->owner_id = auth()->id();
	$forum->channel_id = request('channel_id');
	$forum->title = request('title');
	$forum->slug = request('slug');
	$forum->description = request('description');

	$forum->save();

	return redirect($forum->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
	return view('forums.show', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
	return view('forums.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        //
        $this->authorize('delete', $topic);
        
        //
        $topic->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/topics');
    }
}
