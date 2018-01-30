@extends('layouts.admin')

@section('title', $country->name)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="mt-3">{{ $country->name }}</h1>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection