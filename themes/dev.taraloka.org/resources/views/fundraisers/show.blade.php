@extends('layouts.main')

@section('title', $fundraiser->name)

@section('content')

    <div class="container page-top">

        <div class="row pt-3">
 	        <div class="col-sm-8 col-md-9">

                <h1>{{ $fundraiser->name }}</h1>

<h2>We have raised ${{ number_format($fundraiser->actual / 100, 0) }} of our ${{ number_format($fundraiser->goal / 100, 0) }} goal.</h2>

<p class="lead">{{ $fundraiser->description }}</p>

	        </div>
	        <div class="col-sm-4 col-md-3">


		    </div>

	    </div>
	</div>
    </div>

@endsection