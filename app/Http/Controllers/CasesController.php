<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCase;
use App\Filters\CaseFilters;
use Illuminate\Http\Request;

class CasesController extends Controller
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
    public function index(CaseFilters $filters)
    {
        //
	$clientCases = ClientCase::filter($filters)->with(['client', 'owner'])->get();

	return view('cases.index', compact('clientCases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$clients = Client::where('account_id', config('view.account_id'))->orderBy('name', 'asc')->get();
	
        //
	return view('cases.create', compact('clients'));
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
	$this->authorize('create', \App\Models\ClientCase::class);
	
        //
	$this->validate(request(), [
	    'client' => 'required',
	    'name' => 'required',
	    'description' => 'required',
	]);

	$clientCase = new ClientCase();

	$clientCase->creator_id = auth()->id();
	$clientCase->owner_id = auth()->id();
	$clientCase->account_id = config('view.account_id');
	$clientCase->client_id = request('client');
	$clientCase->name = request('name');
	$clientCase->description = request('description');

	$clientCase->save();

	if(request()->expectsJson()) {
	    return $clientCase->load(['creator', 'owner']);
	}

	return redirect($clientCase->path());	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientCase  $clientCase
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
	if(!$clientCase = ClientCase::find($id)) {
	    abort(404);
	}
	
        //
	return view('cases.show', compact('clientCase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientCase  $clientCase
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
	$clientCase = ClientCase::find($id);

	$this->authorize('update', $clientCase);

	$clients = Client::all();

        //
	return view('cases.edit', compact(['clientCase', 'clients']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientCase  $clientCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientCase $clientCase)
    {
        //
	$this->authorize('update', $clientCase);

	$this->validate(request(), [
	    'name' => 'required',
	    'client' => 'required',
	]);

	$clientCase->name = request('name');
	$clientCase->client_id = request('client');

	$clientCase->save();

	if(request()->expectsJson()) {
	    return $clientCase->load(['creator', 'owner']);
	}

	return redirect($clientCase->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientCase  $clientCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
	if(!$clientCase = ClientCase::find($id)) {
	    abort(404);
	}

        //
	$this->authorize('delete', $clientCase);

	$clientCase->delete();

	if(request()->expectsJson()) {
	    return response([], 204);
	}

	return back();
    }

    public function settle(int $id)
    {
        if(!$clientCase = ClientCase::find($id)) {
	    abort(404);
	}

	$this->authorize('settle', $clientCase);

	$clientCase->settle();

	if(request()->expectsJson()) {
	    response([], 204);
	}

	return back();
    }
}
