@extends('layouts.main')

@section('title', 'Reply #' . $reply->id)

@section('content')

    <div class="container page-top">

        <div class="row">
            <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>{{ 'Reply #' . $reply->id }}</h1>
		</div>

		<p class="lead">{{ $reply->content }}</p>

            </div>
	    <div class="col-sm-4 col-md-3">



            </div>
        </div>

    </div>

@endsection