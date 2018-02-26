@extends('layouts.admin')

@section('title', auth()->user()->name . '\'s Profile')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>{{ auth()->user()->name . '\'s Profile' }}</h1>
		</div>

                <p class="lead">User profile for {{ auth()->user()->name }}.</p>

	    </div>
	    <div class="col-sm-4 col-md-3">

	      

	    </div>
	</div>
    </div>

@endsection