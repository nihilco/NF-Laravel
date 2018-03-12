<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors = Author::orderBy('last_name')->paginate(24);
	return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('authors.create');
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
	$this->authorize('create', Author::class);

	$this->validate(request(), [
	    'first' => 'required',
	    'middle' => '',
	    'last' => 'required',
	    'website' => '',
	    'description' => 'required',
	]);

	$author = new Author();

	$author->creator_id = auth()->id();
	$author->owner_id = auth()->id();
	$author->first_name = request('first');
	if(request('middle') != '') {
	    $author->middle_name = request('middle');
	}
	$author->last_name = request('last');
	if(request('website') != '') {
	    $author->website = request('website');
	}
	$author->description = request('description');

	$author->save();

	if(request()->expectsJson()) {
	    return $author->load(['creator', 'owner']);
	}

	return redirect($author->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
	return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
	$this->authorize('update', $author);

	return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
	$this->authorize('update', $author);

	$this->validate(request(), [
	    'first' => 'required',
	    'middle' => '',
	    'last' => 'required',
	    'website' => '',
	    'description' => 'required',
	]);

	$author->first_name = request('first');
	if(request('middle') != '') {
	    $author->middle_name = request('middle');
	}
	$author->last_name = request('last');
	if(request('website') != '') {
	    $author->website = request('website');
	}
	$author->description = request('description');

	$author->save();

	if(request()->expectsJson()) {
	    return $author->load(['creator', 'owner']);
	}

	return redirect($author->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
        $this->authorize('delete', $author);
        
        $author->delete();

        if(request()->expectsJson()) {
            return response([], 204);
        }
        
        return back();
    }
}
