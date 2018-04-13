<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCase;
use App\Models\CaseType;
use App\Models\Province;
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
        $clientCases = ClientCase::filter($filters)->with(['client', 'owner'])->paginate(25);

        return view('cases.index', compact('clientCases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$clients = Client::where('account_id', config('view.account_id'))->orderBy('name', 'asc')->get();
        //$clients = Client::orderBy('name', 'asc')->get();
        //$caseTypes = CaseType::all();
        $provinces = Province::all();
        
        //
        //return view('cases.create', compact(['clients', 'caseTypes', 'provinces']));
        return view('cases.create', compact(['provinces']));
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

        $validators = [
            'name' => 'required',
            'type' => 'required',
            'county' => 'required',
        ];

        if(request('email') != '') {
            $validators['email'] = 'email';
        }

        if(request('doi') != '') {
            $validators['doi'] = 'date';
        }

        if(request('dos') != '') {
            $validators['dos'] = 'date';
        }
        
        //
        $this->validate(request(), $validators);

        //
        $client = new Client();
        
        $client->creator_id = auth()->id();
        $client->owner_id = auth()->id();
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
        
        $client->save();

        if(!$type = CaseType::where('name', request('type'))->first()) {
            $type = new CaseType();

            $type->creator_id = auth()->id();
            $type->owner_id = auth()->id();
            $type->name = request('type');
            $type->description = '';
            
            $type->save();
        }

        // Case
        $clientCase = new ClientCase();
        
        $clientCase->creator_id = auth()->id();
        $clientCase->owner_id = auth()->id();
        $clientCase->client_id = $client->id;
        $clientCase->case_type_id = $type->id;
        if(request('doi') != null && request('doi') != '') {
            $clientCase->incident_at = \Carbon\Carbon::createFromFormat('m/d/Y', request('doi'));
        }
        if(request('dos') != null && request('dos') != '') {
            $clientCase->settled_at = \Carbon\Carbon::createFromFormat('m/d/Y', request('dos'));
        }
        $clientCase->county = request('county');
        $clientCase->description = request('description');
        
        $clientCase->save();
        
        if(request()->expectsJson()) {
            return $clientCase->load(['creator', 'owner', 'client']);
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
        
        //$clients = Client::all();
        //$caseTypes = CaseType::all();
        $provinces = Province::all();
        
        //
        //return view('cases.edit', compact(['clientCase', 'clients', 'caseTypes', 'provinces']));
        return view('cases.edit', compact(['clientCase', 'provinces']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientCase  $clientCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $clientCase = ClientCase::find($id);
        
        //
        $this->authorize('update', $clientCase);

        $validators = [
            'name' => 'required',
            'type' => 'required',
            'county' => 'required',
        ];

        if(request('email') != '') {
            $validators['email'] = 'email';
        }

        if(request('doi') != '') {
            $validators['doi'] = 'date';
        }

        if(request('dos') != '') {
            $validators['dos'] = 'date';
        }
        
        //
        $this->validate(request(), $validators);

        //
        if(!$client = Client::where('name', request('name'))->first()) {
            $client = new Client();
            $client->creator_id = auth()->id();
            $client->owner_id = auth()->id();
        }

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
        
        $client->save();
        
        //
        if(!$type = CaseType::where('name', request('type'))->first()) {
            $type = new CaseType();
            $type->creator_id = auth()->id();
            $type->owner_id = auth()->id();
            $type->description = '';
        }
        
        $type->name = request('type');

        $type->save();
        
        $clientCase->county = request('county');
        $clientCase->client_id = $client->id;
        $clientCase->case_type_id = $type->id;
        if(request('doi') != null && request('doi') != '') {
            $clientCase->incident_at = \Carbon\Carbon::createFromFormat('m/d/Y', request('doi'));
        }else{
            $clientCase->incident_at = null;
        }
        if(request('dos') != null && request('dos') != '') {
            $clientCase->settled_at = \Carbon\Carbon::createFromFormat('m/d/Y', request('dos'));
        }else{
            $clientCase->settled_at = null;
        }
        $clientCase->description = request('description');
        
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
        
        return redirect('/dashboard');
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
