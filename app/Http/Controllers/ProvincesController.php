<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvincesController extends Controller
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
    public function index()
    {
        //
        $provinces = Province::all();
        return view('provinces.index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
	
        //
        return view('provinces.create', compact(['countries']));
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
            'abbr' => 'required',
            'name' => 'required',
            'country' => 'required|integer',
        ]);
        
        $province = new Province();
        
        $province->creator_id = auth()->id();
        $province->owner_id = auth()->id();
        $province->abbr = request('abbr');
        $province->name = request('name');
        $province->country_id = request('country');
        
        $province->save();
        
        if(request()->expectsJson()) {
            return $province->load(['creator', 'owner']);
        }
        
        return redirect($province->path());
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        //
        return view('provinces.show', compact('province'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province)
    {
        $this->authorize('update', $province);
        
    	$countries = Country::all();
        
        //
        return view('provinces.edit', compact(['province', 'countries']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        $this->authorize('update', $province);
	
        //
        $this->validate(request(), [
            'abbr' => 'required',
            'name' => 'required',
            'country' => 'required|integer',
        ]);
        
        $province->abbr = request('abbr');
        $province->name = request('name');
        $province->country_id = request('country');
        
        $province->save();
        
        if(request()->expectsJson()) {
            return $province->load(['creator', 'owner']);
        }
        
        return redirect($province->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        //
        $this->authorize('delete', $province);
        
        $province->delete();
        
        if(request()->expectsJson()) {
            return response([], 204);
        }
        
        return back();
    }
}
