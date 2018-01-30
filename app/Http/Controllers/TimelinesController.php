<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelinesController extends Controller
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
	$timelines = Timeline::all();
	return view('timelines.index', compact('timelines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('timelines.create');
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
	    'customer_id' => 'required',
	    'content' => 'required',
	]);

	$timeline = new Timeline();

	$timeline->creator_id = auth()->id();
	$timeline->owner_id = auth()->id();
	$timeline->customer_id = request('customer_id');
	$timeline->content = request('content');

	$timeline->save();

	if(request()->expectsJson()) {
	    return $timeline->load(['creator', 'owner']);
	}

	return redirect(Customer::find($timeline->customer_id)->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function show(Timeline $timeline)
    {
        //
	return view('timelines.show', [
	    'timeline' => $timeline,
	]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeline $timeline)
    {
        //
	return view('timelines.edit', compact('timeline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timeline $timeline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timeline $timeline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timeline $timeline)
    {
        //
    }
}
