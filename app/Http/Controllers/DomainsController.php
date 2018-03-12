<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainsController extends Controller
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
        $domains = Domain::all();
        return view('domains.index', compact('domains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('domains.create');
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
            'tld' => 'required',
            'registered' => 'required',
            'expires' => 'required',
        ]);
        
        $domain = new Domain();
        
        $domain->creator_id = auth()->id();
        $domain->owner_id = auth()->id();
        $domain->tld = request('tld');
        $domain->registered_on = request('registered');
        $domain->expires_on = request('expires');
        
        $domain->save();
        
        if(request()->expectsJson()) {
            return $domain->load(['creator', 'owner']);
        }
        
        return redirect($domain->path());
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        //
        return view('domains.show', compact('domain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit(Domain $domain)
    {
        //
        $this->authorize('update', $domain);
	
        return view('domains.edit', compact('domain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domain $domain)
    {
        //
        $this->authorize('update', $domain);
        
        $this->validate(request(), [
            'tld' => 'required',
            'registered' => 'required',
            'expires' => 'required',
        ]);
        
        $domain->tld = request('tld');
        $domain->registered_on = request('registered');
        $domain->expires_on = request('expires');
        
        $domain->save();
        
        if(request()->expectsJson()) {
            return $domain->load(['creator', 'owner']);
        }
        
        return redirect($domain->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domain $domain)
    {
        //
        $this->authorize('delete', $domain);
        
        $domain->delete();
        
        if(request()->expectsJson()) {
            return response([], 204);
        }
        
        return back();
    }
}
