@extends('layouts.main')

@section('title', $tutorial->title)

@section('content')

    <div class="container page-top">

        <div class="row pt-3">
	    <div class="col-sm-8 col-md-9">

                <h1>{{ $tutorial->title }}</h1>
		<h2>{{ $tutorial->subtitle }}</h2>

		<p class="lead">{{ $tutorial->description }}</p>

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