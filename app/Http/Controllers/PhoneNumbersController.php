<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use Illuminate\Http\Request;

class PhoneNumbersController extends Controller
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
	$phoneNumbers = PhoneNumber::all();
	return view('phone-numbers.index', compact('phoneNumbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('phone-numbers.create');
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
	    'number' => 'required',
	]);

	$phoneNumber = new PhoneNumber();

	$phoneNumber->creator_id = auth()->id();
	$phoneNumber->owner_id = auth()->id();
	$phoneNumber->resource_id = 1;
	$phoneNumber->resource_type = \App\Models\Customer::class;
	$phoneNumber->number = request('number');

	$phoneNumber->save();

	if(request()->expectsJson()) {
	    return $phoneNumber->load(['creator', 'owner']);
	}

	return redirect($phoneNumber->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneNumber $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneNumber $phoneNumber)
    {
        //
	return view('phone-numbers.show', compact('phoneNumber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneNumber $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneNumber $phoneNumber)
    {
        //
	return view('phone-numbers.edit', compact('phoneNumber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhoneNumber $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhoneNumber $phoneNumber)
    {
                //
	$this->validate(request(), [
	    'number' => 'required',
	]);
	
	$phoneNumber->number = request('number');

	$phoneNumber->save();

	if(request()->expectsJson()) {
	    return $phoneNumber->load(['creator', 'owner']);
	}

	return redirect($phoneNumber->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneNumber $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneNumber $phoneNumber)
    {
        //
    }
}
