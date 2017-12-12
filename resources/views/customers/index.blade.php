@extends('layouts.main')

@section('title', 'Customers')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
	            <h1>Customers</h1>
		</div>

                <p class="lead">Customers for the site.</p>

		@foreach($customers as $customer)
		<div class="row">
		  <div class="col-sm-12">
                    <h2><a href="{{ $customer->path() }}">{{ $customer->name }}</a></h2>
		  </div>
                </div>
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

	      

	    </div>
	</div>
    </div>

@endsection