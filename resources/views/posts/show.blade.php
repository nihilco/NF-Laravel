@extends('layouts.main')

@section('title', $post->title)

@section('content')

    <div class="container page-top">

        <div class="row pt-3">
	    <div class="col-sm-8 col-md-9">

	        <h1>{{ $post->title }}</h1>

                <p class="lead">{{ $post->description }}</p>

		<h2>Comments</h2>

		@forelse($post->comments as $comment)
                <article>
	            <p class="comment-content">{{ $comment->content }}</p>
                </article>
		@empty
		<p>No comments at this time.</p>
		@endforelse

	    </div>
	    <div class="col-sm-4 col-md-3">

                <div class="card mb-3">
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