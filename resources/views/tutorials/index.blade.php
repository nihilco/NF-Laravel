@extends('layouts.main')

@section('title', 'Tutorials')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Tutorials</h1>
		</div>

		<p class="lead">Live and learn.</p>

                @foreach($tutorials as $tutorial)
                <article>
                    <h2><a href="{{ $tutorial->path() }}">{{ $tutorial->title }}</a></h2>
	            <p class="tutorial-description">{{ $tutorial->description }}</p>
                </article>
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

	      @include('tutorials.sidebar')

	    </div>
	</div>
    </div>

@endsection