<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarsController extends Controller
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
        $calendars = Calendar::all();
        return view('calendars.index', compact('calendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('calendars.create', compact([]));
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

        $calendar = new Calendar();

        //
        
        $calendar->save();

        if(request()->expectsJson()) {
            return $calendar->load(['creator', 'owner']);
        }
        
        return redirect($calendar->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendar $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        //
        return view('calendars.show', compact('calendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendar $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {
        //
        return view('calendars.edit', compact(['calendar']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calendar $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendar $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        //
        $this->authorize('delete', $calendar);
        
        //
        $calendar->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/calendars');
    }
}
