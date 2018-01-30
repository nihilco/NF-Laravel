@extends('layouts.main')

@section('title', 'Authors')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Authors</h1>
		    </div>
		    <div class="col-sm-3">
                        <a href="/authors/create" class="btn btn-primary mt-3">Create Author</a>
		    </div>
		</div>

                <p class="lead">Authors for the books.</p>

                @foreach($authors as $author)
                <article>
		    <div class="row">
		        <div class="col-sm-9">
                            <h2><a href="{{ $author->path() }}">{{ $author->first_name . ' ' . $author->last_name }}</a></h2>
			</div>
			<div class="col-sm-3">
			    <ul class="list-inline">
			        <li class="list-inline-item"><a href="{{ $author->path() }}">View</a></li>
			        @can('update', $author)
			        <li class="list-inline-item"><a href="{{ $author->path() . '/edit' }}">Edit</a></li>
			        @endcan
			        @can('delete', $author)
			        <li class="list-inline-item"><form method="POST" action="{{ $author->path() }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			        @endcan
			    </ul>
			</div>
		    </div>
	            <p class="author-description">{{ $author->description }}</p>
                </article>
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
	                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        <a href="#" class="btn btn-primary">Go somewhere</a>
		    </div>
		</div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
	                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        <a href="#" class="btn btn-primary">Go somewhere</a>
		    </div>
		</div>

	    </div>
	</div>
    </div>
    
@endsection