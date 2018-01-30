<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Http\Request;

class AddressesController extends Controller
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
	$addresses = Address::all();
	return view('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$countries = Country::all();
	$provinces = Province::all();
	
        //
	return view('addresses.create', compact(['countries', 'provinces']));
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
	    'address1' => 'required',
	    'address2' => '',
	    'address3' => '',
	    'city' => 'required',
	    'province' => 'required|integer',
	    'postal_code' => 'required',
	    'country' => 'required|integer',
	]);

	$address = new Address();

	$address->creator_id = auth()->id();
	$address->owner_id = auth()->id();
	$address->address1 = request('address1');
	if(request('address2') != null || request('address2') != '') {
	    $address->address2 = request('address2');
	}
	if(request('address3') != null || request('address3') != '') {
	    $address->address3 = request('address3');
	}
	$address->city = request('city');
	$address->province_id = request('province');
	$address->postal_code = request('postal_code');
	$address->country_id = request('country');

	$address->save();

	if(request()->expectsJson()) {
	    return $address->load(['creator', 'owner']);
	}

	return redirect($address->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addresses  $addresses
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
	return view('addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
    	$countries = Country::all();
	$provinces = Province::all();
	
        //
	return view('addresses.edit', compact(['countries', 'provinces', 'address']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
