@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="jumbotron jumbotron-fluid page-top">
      <div class="container">
        <h1 class="display-3">{{ $tutorial->title }}</h1>
	<h2>{{ $tutorial->subtitle }}</h2>

        <hr class="my-4">
        <p class="lead">{{ $tutorial->description }}</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="{{ $tutorial->path() }}" role="button">Learn more</a>
        </p>
      </div>
    </div>

    <!-- Begin page content -->
    <div class="container">
        <div class="row pb-4">

	    @foreach($posts as $post)
	    <div class="col-sm-4">
	        <h2>{{ $post->title }}</h2>
		<p>{{ $post->description }}</p>
                <a class="btn btn-primary btn-lg" href="{{ $post->path() }}" role="button">Read</a>
	    </div>
	    @endforeach

        </div>
    </div>
@endsection