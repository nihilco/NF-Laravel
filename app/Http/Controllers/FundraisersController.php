<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use App\Http\Requests\FundraiserRequest;

class FundraisersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fundraisers = Fundraiser::all();
        return view('fundraisers.index', compact('fundraisers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fundraisers.create', compact([]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function show(Fundraiser $fundraiser)
    {
        if($fundraiser->id == 1) {
            return view('fundraisers.solar-panel', compact('fundraiser'));
        }
        
        //
        return view('fundraisers.show', compact('fundraiser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function edit(Fundraiser $fundraiser)
    {
        //
        return view('fundraisers.edit', compact(['fundraiser']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\FundraiserRequest $request
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function update(FundraiserRequest $request, Fundraiser $fundraiser)
    {
        if($request->persist($fundraiser)) {

            if(request()->expectsJson()) {
                return $fundraiser->load(['creator', 'owner']);
            }

            return view('fundraisers.success');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fundraiser $fundraiser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fundraiser $fundraiser)
    {
        //
        $this->authorize('delete', $fundraiser);
        
        //
        $fundraiser->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/fundraisers');
    }
}
