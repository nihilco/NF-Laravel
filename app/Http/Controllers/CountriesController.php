<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
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
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('countries.create');
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
            'code' => 'required',
            'name' => 'required',
        ]);
        
        $country = new Country();
        
        $country->creator_id = auth()->id();
        $country->owner_id = auth()->id();
        $country->code = request('code');
        $country->name = request('name');
        
        $country->save();
        
        if(request()->expectsJson()) {
            return $country->load(['creator', 'owner']);
        }
        
        return redirect($country->path());
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
        return view('countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $this->authorize('update', $country);
	
        //
        return view('countries.edit', compact('country'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $this->authorize('update', $country);
        
        //
        $this->validate(request(), [
            'code' => 'required',
            'name' => 'required',
        ]);
        
        $country->code = request('code');
        $country->name = request('name');
        
        $country->save();
        
        if(request()->expectsJson()) {
            return $country->load(['creator', 'owner']);
        }

        return redirect($country->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
        $this->authorize('delete', $country);
        
        $country->delete();
        
        if(request()->expectsJson()) {
            return response([], 204);
        }
        
        return back();
    }
}
