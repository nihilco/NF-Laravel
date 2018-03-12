<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServersController extends Controller
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
        $servers = Server::all();
        return view('servers.index', compact('servers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servers.create', compact([]));
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

        $serer = new Server();

        //

        $server->save();

        if(request()->expectsJson()) {
            return $server->load(['creator', 'owner']);
        }

        return redirect($server->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Server $server
     * @return \Illuminate\Http\Response
     */
    public function show(Server $server)
    {
        //
        return view('servers.show', compact('server'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Server $server
     * @return \Illuminate\Http\Response
     */
    public function edit(Server $server)
    {
        //
        return view('servers.edit', compact(['server']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Server $server
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Server $server)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Server $server
     * @return \Illuminate\Http\Response
     */
    public function destroy(Server $server)
    {
        //
        $this->authorize('delete', $server);
        
        //
        $server->delete();
        
        if(request()->wantsJson()) {
            return response([], 204);
        }
        
        return redirect('/servers');
    }
}
