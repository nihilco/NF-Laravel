<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;

class FollowsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$follows = Follow::all();
	return view('follows.index', compact('follows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('follows.create');
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
	$this->validate($request, [
	    'resource_id' => 'required',
	    'resource_type' => 'required',
	]);

	$resource = request('resource_type')::find(request('resource_id'));

	if($resource->isFollowing) {
	    $resource->unfollow();
	} else {
	  $resource->follow();
	}

	return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Follow $follow
     * @return \Illuminate\Http\Response
     */
    public function show(Follow $follow)
    {
        //
	return view('follows.show', compact('follow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Follow $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(Follow $follow)
    {
        //
	return view('follows.edit', compact('follow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \APp\Models\Follow $follow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Follow $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Follow $follow)
    {
        //
    }
}
