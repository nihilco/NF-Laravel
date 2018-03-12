<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use Illuminate\Http\Request;

class AccountsController extends Controller
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
	$accounts = Account::all();
	return view('accounts.index', compact(['accounts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	$customers = Customer::all();
	
	return view('accounts.create', compact(['customers']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$v = [
	    'type' => 'required',
	    'customer' => 'required',	    
	    'name' => 'required',
	    'description' => 'required',
	];

	if(request('type') == 'standard') {
            $v['stripe'] = 'required';
	    $v['secret'] = 'required';	    
	    $v['publishable'] = 'required';
	}

        //
	$this->validate(request(), $v);

	$customer = Customer::find(request('customer'));

	\Stripe\Account::create([
	    'type' => request('type'),
	]);

	$account = new Account();

	$account->creator_id = auth()->id();
	$account->owner_id = auth()->id();
	$account->type = 'custom';
	$account->name = request('name');
	$account->description = request('description');

	$account->save();

	if(request()->expectsJson()) {
	    return $account->load(['creator', 'owner']);
	}

	return redirect($account->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
	return view('accounts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
	return view('accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
        $this->authorize('delete', $account);
        
        //
        $account->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/accounts');
    }
}
