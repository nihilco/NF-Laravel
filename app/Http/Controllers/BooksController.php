<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Series;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$books = Book::orderBY('title_alphabetic', 'asc')->paginate(24);
	return view('books.index', compact(['books']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	$series = Series::all();
	$authors = Author::all();
	return view('books.create', compact(['authors', 'series']));
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
	$this->authorize('create', Book::class);

	$this->validate(request(), [
	    'display' => 'required',
	    'alphabetic' => 'required',
	    'subtitle' => '',
	    'slug' => 'required',
	    'authors' => 'required|array|min:1',
	    'authors.*' => 'min:1',
	    'series' => '',
	    'order' => '',
	    'description' => 'required',
	]);

	$book = new Book();

	$book->creator_id = auth()->id();
	$book->owner_id = auth()->id();
	$book->title_display = request('display');
	$book->title_alphabetic = request('alphabetic');
	$book->slug = request('slug');
	$book->description = request('description');
	if(request('subtitle') != '') {
	    $book->subtitle = request('subtitle');
	}
	if(request('series') > 0) {
	    $book->series_id = request('series');
	}
	if(request('order') > 0) {
	    $book->series_order = request('order');
	}

	$book->save();

	foreach(request('authors') as $a) {
	    $book->addAuthor($a);
	}

	if($request->expectsJson()) {
	    return $book->load(['creator', 'owner']);
	}

	return redirect($book->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
	return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
	$series = Series::all();
	$authors = Author::all();
	return view('books.edit', compact(['book', 'series', 'authors']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
	$this->authorize('update', $book);

	$this->validate(request(), [
	    'display' => 'required',
	    'alphabetic' => 'required',
	    'subtitle' => '',
	    'slug' => 'required',
    	    'authors' => 'required|array|min:1',
	    'authors.*' => 'min:1',
	    'series' => '',
	    'order' => '',
	    'description' => 'required',
	]);

	//dd(request());

	$book->title_display = request('display');
	$book->title_alphabetic = request('alphabetic');
	$book->slug = request('slug');
	$book->description = request('description');
	if(request('subtitle') != '') {
	    $book->subtitle = request('subtitle');
	}else{
	    $book->subtitle = null;
	}
	if(request('series') > 0) {
	    $book->series_id = request('series');
	}else{
	    $book->series_id = null;
	}
	if(request('order') > 0) {
	    $book->series_order = request('order');
	}else{
	    $book->series_order = null;
	}

	$book->save();

	$book->authors->each->delete();

	foreach(request('authors') as $a) {
	    $book->addAuthor($a);
	}

	if($request->expectsJson()) {
	    return $book->load(['creator', 'owner']);
	}

	return redirect($book->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $this->authorize('delete', $book);
        
        $book->delete();
        
        if(request()->expectsJson()) {
            return response([], 204);
        }
        
        return back();
    }
}
