<?php

namespace App\Http\Controllers;

use App\Models\ClientCase;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
    
    //
    public function index()
    {
	$cases = ClientCase::where('date_settled_at', '=', null)->get();
	
        return view('dashboard.index', compact(['cases']));
    }
}
