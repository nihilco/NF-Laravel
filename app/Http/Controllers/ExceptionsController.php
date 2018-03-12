<?php

namespace App\Http\Controllers;

use App\Models\Exception;
use Illuminate\Http\Request;

class ExceptionsController extends Controller
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
        $exceptions = Exception::all();
        return view('exceptions.index', compact('exceptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exceptions.create');
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
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function show(Exception $exception)
    {
        //
        return view('exceptions.show', compact('exception'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function edit(Exception $exception)
    {
        //
        return view('exceptions.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exception $exception)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exception $exception)
    {
        //
        $this->authorize('delete', $exception);
        
        //
        $exception->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/exceptions');
    }
}
