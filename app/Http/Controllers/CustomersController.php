<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
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
	$customers = Customer::where('account_id', config('view.account_id'))->orderBy('name', 'asc')->get();
	return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$this->authorize('create', \App\Models\Customer::class);
	
        //
	return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$this->authorize('create', \App\Models\Customer::class);
	
        //
	$this->validate(request(), [
	    'name' => 'required',
	    'description' => 'required',
	]);

	$customer = new Customer();

	$customer->creator_id = auth()->id();
	$customer->owner_id = auth()->id();
	$customer->account_id = config('view.account_id');
	$customer->type_id = 1;
	$customer->name = request('name');
	$customer->description = request('description');

	$customer->save();

	if(request()->expectsJson()) {
	    return $customer->load(['creator', 'owner']);
	}

	return redirect($customer->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
	$this->authorize('view', $customer);

	return view('customers.show', [
	    'customer' => $customer->append('class'),
	]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
	$this->authorize('update', $customer);
	
        //
	return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
	$this->authorize('update', $customer);

        //
	$this->validate(request(), [
	    'name' => 'required',
	    'description' => 'required',
	]);

	$customer->name = request('name');
	$customer->description = request('description');

	$customer->save();

	if(request()->expectsJson()) {
	    return $customer->load(['creator', 'owner']);
	}

	return redirect($customer->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
	$this->authorize('delete', $customer);
	
	$customer->delete();

	if(request()->expectsJson()) {
	    return response([], 204);
	}

	return back();
    }
}
