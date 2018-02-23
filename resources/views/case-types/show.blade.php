@extends('layouts.admin')

@section('title', $caseType->name)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="mt-3">{{ $caseType->name }}</h1>

		<p>{{ $caseType->description }}</p>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection