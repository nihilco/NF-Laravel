<?php
  $colors = ['007bff', '6c757d', 'ffc107', '28a745'];
?>

@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

<div class="row">
  <div class="col-sm-9">

<div class="card panel">
  
    <div class="row">
      <div class="col-sm-2 text-center bg-primary card-header">
	  <span class="month">March</span><br />
	  <span class="day">3</span>
      </div>
      <div class="col-sm-2 card-body">
	  <span class="weekday">Saturday</span><br />
	  <span class="time">1:38<small>pm</small></span>
      </div>
      <div class="col-sm-2 card-body">
	  <span class="weekday">Saturday</span><br />
	  <span class="time">1:38<small>pm</small></span>
      </div>
      <div class="col-sm-2 card-body">
	  <span class="weekday">Saturday</span><br />
	  <span class="time">1:38<small>pm</small></span>
      </div>
      <div class="col-sm-2 card-body">
	  <span class="weekday">Saturday</span><br />
	  <span class="time">1:38<small>pm</small></span>
      </div>
      <div class="col-sm-2 card-body">
	  <span class="weekday">Saturday</span><br />
	  <span class="time">1:38<small>pm</small></span>
      </div>
    </div>

</div>

  </div>
  <div class="col-sm-3">

<div class="card panel">
  
    <div class="row">
      <div class="col-sm-5 text-center bg-primary card-header">
	  <span class="month">March</span><br />
	  <span class="day">3</span>
      </div>
      <div class="col-sm-7 card-body">
	  <span class="weekday">Saturday</span><br />
	  <span class="time">1:38<small>pm</small></span>
      </div>
    </div>

</div>

  </div>
</div>

</div>

    <div class="container-fluid page-top">

        <div class="row">
	    <div class="col-sm-12">

	        <div class="mt-3">
                    <h1>Dashboard</h1>
		</div>

                <ul class="list-group">

		@forelse($caseNotes as $note)

                  <li class="list-group-item">

      <div class="row case-note">
        <div class="col-sm-1">
          <img class="img-fluid" src="https://via.placeholder.com/150x150/{{ $colors[$note->owner_id - 1] }}/ffffff?text={{ $note->owner->initials() }}" alt="{{ $note->case->owner->initials() }}" />
	</div>
        <div class="col-sm-11">
	<form method="POST" action="{{ $note->path() }}" style="position:absolute;right:15px;">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
	  <h6><a href="{{ $note->case->path() }}">{{ $note->case->name }}</a></h6>
          <p style="margin-bottom:0;margin-right:2em;">{{ $note->content }}</p>
	  <small class="text-muted">Posted by <a href="{{ $note->owner->path() }}">{{ $note->owner->name }}</a> on {{ $note->created_at->toDayDateTimeString() }}</small>
	</div>	
      </div>	    

		  </li>

		@empty
		
		    <tr>
		      <td colspan="4">No active cases at this time.</td>
		    </tr>
		    
                @endforelse

   	        </ul>

	    </div>
	</div>
    </div>

@endsection