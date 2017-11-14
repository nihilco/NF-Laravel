@extends('layouts.main')

@section('title', $forum->title)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
	            <h1>{{ $forum->title }}</h1>
		</div>

                <p class="lead">{{ $forum->description }}</p>

		<h2>Threads</h2>

		@forelse($forum->threads as $thread)
                <article>
		    <a href="{{ $thread->path() }}"><h3>{{ $thread->title }}</h3></a>
	            <p class="thread-content">{{ $thread->content }}</p>
                </article>
		@empty
		<p>No threads at this time.</p>
		@endforelse

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