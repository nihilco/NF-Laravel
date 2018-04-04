<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!auth()->guest()) {
            return redirect()->route('dashboard');
        }
        
        //
        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request\RegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {
        $request->persist();
    
        return redirect()->route('dashboard');
    }

}

