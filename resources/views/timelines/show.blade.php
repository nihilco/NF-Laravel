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

		<h2>Timeline</h2>

		<table class="table table-bordered table-striped">
		  <tbody>

		@forelse($customer->timelines as $timeline)

		    <tr>
		      <td scope="row">{{ $timeline->note }}</td>
		      <td scope="row">{{ $timeline->created_at->format('F j, Y \a\t g:i A') }}</td>
		    </tr>

		@empty
          	    <tr>
		      <td scope="row">No timeline entries at this time.</td>
		    </tr>
		@endforelse

		  </tbody>
		</table>

		<form action="/timelines" method="POST">
		  <input name="customer_id" type="hidden" value="{{ $customer->id }}">
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Use the form below to add a timeline event:</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Add Timeline</button>
                </form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection