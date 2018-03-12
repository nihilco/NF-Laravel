<?php

namespace App\Http\Controllers;

use App\Models\Alias;
use Illuminate\Http\Request;

class AliasesController extends Controller
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
        $aliases = Alias::all();
        return view('aliases.index', compact('aliases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aliases.create', compact([]));
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
            
        ]);
        
        $alias = new Alias();
        
        //
        
        $alias->save();
        
        if(request()->expectsJson()) {
            return $alias->load(['creator', 'owner']);
        }
        
        return redirect($alias->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alias  $alias
     * @return \Illuminate\Http\Response
     */
    public function show(Alias $alias)
    {
        //
        return view('aliases.show', compact('alias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alias  $alias
     * @return \Illuminate\Http\Response
     */
    public function edit(Alias $alias)
    {
        //
        return view('alias.edit', compact(['alias']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alias  $alias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alias $alias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alias  $alias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alias $alias)
    {
        //
        $this->authorize('delete', $alias);
        
        //
        $alias->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/aliases');
    }
}
