@extends('layouts.main')

@section('title', $user->name)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>{{ $user->name }}</h1>
		</div>

		<p class="lead">Here is a bit of what they have done...</p>

		<div class="row mt-3">
		  <div class="col-sm-12">
		    <h2>Activity</h2>
		  </div>
		</div>
		@forelse($activities as $date => $activity)
		    <h4>{{ $date }}</h4>
		    @foreach($activity as $record)
		        @if(view()->exists('activities.' . $record->type))
 	                    @include('activities.' . $record->type, ['activity' => $record])
			@endif    
		    @endforeach
		@empty
		    <p>No activity at this time.</p>
                @endforelse

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>
    
@endsection