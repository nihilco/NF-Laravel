@extends('layouts.main')

@section('title', $author->first_name . ' ' . $author->last_name)

@section('content')

    <div class="container page-top">

        <div class="row">
            <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>{{ $author->first_name . ' ' . $author->last_name }}</h1>
		</div>

		<p class="lead">{{ $author->description }}</p>

            </div>
	    <div class="col-sm-4 col-md-3">



            </div>
        </div>

    </div>

@endsection