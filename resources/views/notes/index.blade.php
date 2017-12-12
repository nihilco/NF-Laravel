@extends('layouts.main')

@section('title', 'Notes')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
	            <h1>Notes</h1>
		</div>

                <p class="lead">Notes for customers.</p>

		@foreach($notes as $note)
		<div class="row">
		  <div class="col-sm-12">
                    <h2>{{ $note->content }}</p>
		  </div>
                </div>
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

	      

	    </div>
	</div>
    </div>

@endsection