<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use App\Models\User;
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
        //$customers = Customer::where('account_id', config('view.account_id'))->orderBy('name', 'asc')->get();
        $customers = Customer::orderBy('name', 'asc')->paginate(24);
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

        $accounts = Account::all();

        //
        return view('customers.create', compact(['accounts']));
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
            'type' => 'required',
            'email' => 'required|email',
            'name' => 'required',
            'description' => 'required',
        ]);
        
        if(!$user = User::where('email', request('email'))->first()) {
            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'username' => request('email'),
            ]);
        }
        
        if($c = Customer::where([['owner_id', $user->id],['account_id', config('view.account_id')]])->first()) {
            abort(400, 'Customer already exists!');
        }
        
        $customer = new Customer();
        
        $customer->creator_id = auth()->id();
        $customer->owner_id = $user->id;
        $customer->account_id = config('view.account_id');
        $customer->type = request('type');
        $customer->name = request('name');
        $customer->description = request('description');
        
        $customer->save();
        
        if(!$stripe_id = request('stripe')) {
            $sc = \Stripe\Customer::create([
                'email' => $user->email,
                'description' => request('description'),
                'metadata' => [
                    'account_id' => config('view.account_id'),
                    'customer_id' => $customer->id,
                ],
            ], 'sk_test_pkUBnMZ0EEuUhIWsJGeyVNuX');
            $stripe_id = $sc->id;
        }
        
        $customer->stripe_id = $stripe_id;
        
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
