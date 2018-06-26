<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\DonationRequest;

class DonationController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DonationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonationRequest $request)
    {
        $request->persist();

        return view('donation.success');
    }
}
