<?php

namespace App\Http\Controllers;

use App\Models\CaseType;
use Illuminate\Http\Request;

class CaseTypesController extends Controller
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
        $caseTypes = CaseType::all();
        return view('case-types.index', compact('caseTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('case-types.create');
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
            'name' => 'required',
            'description' => 'required',
        ]);
        
        $caseType = new CaseType();
        
        $caseType->creator_id = auth()->id();
        $caseType->owner_id = auth()->id();
        $caseType->name = request('name');
        $caseType->description = request('description');
        if(request('color') && request('color') != '') {
            $caseType->color = request('color');
        }
        
        $caseType->save();
        
        if(request()->expectsJson()) {
            return $caseType->load(['creator', 'owner']);
        }
        
        //return redirect($caseType->path());
        return back();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaseType  $caseType
     * @return \Illuminate\Http\Response
     */
    public function show(CaseType $caseType)
    {
        //
        return view('case-types.show', [
            'caseType' => $caseType,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaseType  $caseType
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseType $caseType)
    {
        //
        return view('case-types.edit', compact('caseType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaseType  $caseType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseType $caseType)
    {
        //
        $this->authorize('update', $caseType);
        
        //
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        $caseType = new CaseType();
        
        $caseType->creator_id = auth()->id();
        $caseType->owner_id = auth()->id();
        $caseType->name = request('name');
        $caseType->description = request('description');
        if(request('color') && request('color') != '') {
            $caseType->color = request('color');
        }
        
        $caseType->save();
        
        if(request()->expectsJson()) {
            return $caseType->load(['creator', 'owner']);
        }
        
        return redirect($caseType->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseType $caseType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseType $caseType)
    {
        //
        $this->authorize('delete', $caseType);
        
        $caseType->delete();

        if(request()->expectsJson()) {
            return response([], 204);
        }
        
        return back();
    }
}
