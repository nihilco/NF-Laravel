@extends('layouts.main')

@section('title', $type->name)

@section('content')

    <div class="container page-top">

        <div class="row">
            <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>{{ $type->name }}</h1>
		</div>

		<p class="lead">{{ $type->description }}</p>

            </div>
	    <div class="col-sm-4 col-md-3">



            </div>
        </div>

    </div>

@endsection