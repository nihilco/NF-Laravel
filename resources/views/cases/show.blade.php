@extends('layouts.admin')

@section('title', $clientCase->name)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="mt-3">{{ $clientCase->name }}</h1>

                <p class="">{{ $clientCase->description }}</p>

		<h2>Case Notes</h2>

		<form action="/case-notes" method="POST" class="pb-3">
		  {{ csrf_field() }}
		  <input name="case_id" type="hidden" value="{{ $clientCase->id }}">
		  <div class="form-group">
		    <label for="content">Use the form below to add a case note:</label>
		    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Add Case Note</button>
                </form>

		<?php $first = true ?>

		@forelse($clientCase->notes() as $note)

	        <div class="row case-notes-header{{ ($first) ? ' first' : '' }}">
	            <div class="col-sm-8">
		    <?php $first = false; ?>
		        Posted by <a href="{{ $note->owner->path() }}">{{ $note->owner->name }}</a> on {{ $note->created_at->toDayDateTimeString() }}
	            </div>
		    <div class="col-sm-4 text-right">
		        <ul class="list-inline" style="margin-bottom:0;">
 			  <li class="list-inline-item"><form method="POST" action="/case-notes/{{ $note->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			</ul>
		    </div>
		</div>
		<div class="row case-notes-content">
   	            <div class="col-sm-12">
		        {{ $note->content }}
	            </div>
	        </div>

	        @empty

	        <div class="row">
	            <div class="col-sm-12">
		        No case notes at this time.
	            </div>
	        </div>

	        @endforelse

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection