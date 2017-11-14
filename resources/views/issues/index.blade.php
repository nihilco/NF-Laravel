@extends('layouts.main')

@section('title', 'Issues')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Issues</h1>
		</div>

                <p class="lead">Issues for the blog.</p>

                @foreach($issues as $issue)
                <article>
                    <h2><a href="{{ $issue->path() }}">{{ $issue->subject }}</a></h2>
	            <p class="issue-description">{{ $issue->content }}</p>
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