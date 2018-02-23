<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Province;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
	$clients = Client::where('account_id', config('view.account_id'))->orderBy('name', 'asc')->get();
	return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$this->authorize('create', \App\Models\Client::class);

	$provinces = Province::all();
	
        //
	return view('clients.create', compact(['provinces']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$this->authorize('create', \App\Models\Client::class);
	
        //
	$this->validate(request(), [
	    'name' => 'required',
	    'email' => 'required|email',
	    'phone' => 'required',
	    'address1' => 'required',
	    'address2' => '',
	    'city' => 'required',
	    'province' => 'required',
	    'postal_code' => 'required',
	    'description' => 'required',
	]);

	$client = new Client();

	$client->creator_id = auth()->id();
	$client->owner_id = auth()->id();
	//$client->account_id = config('view.account_id');
	$client->name = request('name');
	$client->email = request('email');
	$client->phone = request('phone');
	$client->address1 = request('address1');
	if(request('address2') != null && request('address2') != '') {
	    $client->address2 = request('address2');
	}
	$client->city = request('city');
	$client->province_id = request('province');
	$client->postal_code = request('postal_code');
	$client->description = request('description');

	$client->save();

	if(request()->expectsJson()) {
	    return $client->load(['creator', 'owner']);
	}

	return redirect($client->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
	$this->authorize('view', $client);

	return view('clients.show', [
	    'client' => $client,
	]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
	$this->authorize('update', $client);
	
        //
	return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
	$this->authorize('update', $client);

	//dd($client);

        //
	$this->validate(request(), [
	    'name' => 'required',
	    //'description' => 'required',
	]);

	$client->name = request('name');
	$client->description = request('description');

	$client->save();

	if(request()->expectsJson()) {
	    return $client->load(['creator', 'owner']);
	}

	//return redirect($client->path());
	return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
	$this->authorize('delete', $client);
	
	$client->delete();

	if(request()->expectsJson()) {
	    return response([], 204);
	}

	return back();
    }
}
