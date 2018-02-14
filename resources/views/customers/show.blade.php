@extends('layouts.admin')

@section('title', $customer->name)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="mt-3">{{ $customer->name }}</h1>

		@if($customer->description)
		<p>{{ $customer->description }}</p>
		@endif

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection