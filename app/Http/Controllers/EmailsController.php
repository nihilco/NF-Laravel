<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailsController extends Controller
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
        $emails = Email::all();
        return view('emails.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('emails.create', compact([]));
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
            
        ]);
        
        $email = new Email();

        //
        
        $email->save();

        if(request()->expectsJson()) {
            return $email->load(['creator', 'owner']);
        }

        return redirect($email->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
        return view('emails.show', compact('email'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
        return view('emails.edit', compact(['email']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Email $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
        $this->authorize('delete', $email);
        
        //
        $email->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/emails');
    }
}
