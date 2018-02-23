<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCase;
use App\Models\CaseNote;
use Illuminate\Http\Request;

class CaseNotesController extends Controller
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
	$caseNotes = CaseNote::all();
	return view('case-notes.index', compact('caseNotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('case-notes.create');
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
	    'case_id' => 'required',
	    'content' => 'required',
	]);

	$caseNote = new CaseNote();

	$caseNote->creator_id = auth()->id();
	$caseNote->owner_id = auth()->id();
	//$caseNote->account_id = config('view.account_id');
	$caseNote->case_id = request('case_id');
	$caseNote->content = request('content');

	$caseNote->save();

	if(request()->expectsJson()) {
	    return $caseNote->load(['creator', 'owner']);
	}

	return redirect(ClientCase::find($caseNote->case_id)->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaseNote  $caseNote
     * @return \Illuminate\Http\Response
     */
    public function show(CaseNote $caseNote)
    {
        //
	return view('case-notes.show', [
	    'caseNote' => $caseNote,
	]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaseNote  $caseNote
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseNote $caseNote)
    {
        //
	return view('casse-notes.edit', compact('caseNote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaseNote  $caseNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseNote $caseNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseNote $caseNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseNote $caseNote)
    {
        //
	$this->authorize('delete', $caseNote);

	$caseNote->delete();

	if(request()->expectsJson()) {
	    return response([], 204);
	}

	return back();
    }
}
