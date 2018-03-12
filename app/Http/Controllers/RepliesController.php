<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'list']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $replies = Reply::all();
        return view('replies.index', compact('replies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('replies.create');
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
            'content' => 'required',
        ]);

        //
        //$path = $request->path();
        //list($class, $id, $action) = explode('/', $path);
        
        //if($class == 'threads') {
        //    $model = \App\Models\Thread::find($id);
        //}elseif($class == 'issues') {
        //    $model = \App\Models\Issue::find($id);
        //}elseif($class == 'posts') {
        //    $model = \App\Models\Post::find($id);
        //}else{
        //    abort(404, 'Given resource not found.');
        //}
        
        $reply = new Reply();

        $reply->creator_id = auth()->id();
        $reply->owner_id = auth()->id();
        $reply->resource_id = request('resource_id');
        $reply->resource_type = request('resource_type');
        $reply->favorites_count = 0;
        $reply->content = request('content');
        
        $reply->save();
        
        if(request()->expectsJson()) {
            return $reply->load(['creator', 'owner']);
        }
        
        return redirect($model->path())->with('flash', 'Your reply was successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        //
        return view('replies.show', compact('reply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
        return view('replies.edit', compact('reply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        //
        $this->authorize('update', $reply);
        
        $reply->content = request('content');
        $reply->save();
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        //
        $this->authorize('delete', $reply);
        
        $reply->delete();
        
        if(request()->wantsJson()) {
            return response(['status' => 'Reply was deleted.'], 204);
        }
        
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        if(request()->expectsJson()) {
            $cn = request('resource_type');
            return $cn::find(request('resource_id'))->replies()->paginate(20);
        }
        
        //
        $replies = Reply::all();
        return view('replies.list', compact('replies'));
    }
}
