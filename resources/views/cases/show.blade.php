<?php
  $colors = ['007bff', '6c757d', 'ffc107', '28a745'];
?>

@extends('layouts.admin')

@section('title', $clientCase->client->name . ' - ' . $clientCase->county . ' County ' . $clientCase->type->name)

@section('content')

    <div class="container-fluid page-top" style="background:lightgray;">
      <div class="container">
        <div class="row" >
          <div class="col-sm-6">

            <h1 class="mt-3">{{ $clientCase->client->name }}</h1>
            <h3 class="mt-3">{{ $clientCase->county }} County <span class="badge badge-{{ $clientCase->type->color }}">{{ $clientCase->type->name }}</span></h3>

            <p class="">{{ $clientCase->description }}</p>

	  </div>
	  <div class="col-sm-3">
	    <ul class="list-unstyled mt-3">
          <li><strong>Contact Information:</strong></li>
	      @if($clientCase->client->email)
	      <li><a href="mailto:{{ $clientCase->client->email }}" target="_blank">{{ $clientCase->client->email }}</a></li>
	      @endif
	      @if($clientCase->client->phone)
              <li><a href="tel:{{ $clientCase->client->phone }}" taget="_blank">{{ $clientCase->client->phone }}</a></li>
	      @endif
	      @if($clientCase->client->address1 || $clientCase->client->address2 || $clientCase->client->city || $clientCase->client->province || $clientCase->client->postalcode)
              <li>{{ $clientCase->client->address1 }}<br />
{{ ($clientCase->client->address2 != null || $clientCase->client->address2 != '') ? $clientCase->client->address2 . '<br />' : '' }}
{{ $clientCase->client->city }}, {{ $clientCase->client->province->abbr }} {{ $clientCase->client->postal_code }}</li>
   	      @endif
            </ul>
	  </div>
  	  <div class="col-sm-3 text-right">

	    <ul class="list-inline mt-3">
	      @if($clientCase->date_settled_at == null)
	      <li class="list-inline-item"><form action="{{ $clientCase->path() . '/settle' }}" method="POST">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-lg btn-success"><i class="fas fa-exchange-alt"></i></button></form></li>
	      @endif
	      @can('update', $clientCase)
	      <li class="list-inline-item"><a href="{{ $clientCase->path() . '/edit' }}" class="btn btn-lg btn-primary"><i class="fas fa-edit"></i></a></li>
	      @endcan	      
	      @can('delete', $clientCase)
	      <li class="list-inline-item"><form action="{{ $clientCase->path() }}" method="POST">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-lg btn-danger"><i class="fas fa-trash-alt"></i></button></form></li>
	      @endcan
            </ul>
	 
	  </div>
	</div>
      </div>
    </div>
    
    <div class="container">
      <div class="row pt-3">
        <div class="col-sm-12">
	  <form action="/case-notes" method="POST" class="">
	    {{ csrf_field() }}
	    <input name="case_id" type="hidden" value="{{ $clientCase->id }}">
	    <div class="input-group mb-3">
	      <input type="text" id="content" name="content" class="form-control" placeholder="Write a note" aria-label="Write a note">
              <div class="input-group-append">
  	        <button class="btn btn-primary" type="submit">Add Note</button>
	      </div>
	    </div>
          </form>
	</div>
      </div>      
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
	
          <ul class="list-group">

          @forelse($clientCase->notes() as $note)

	    <li class="list-group-item">
      <div class="row case-note">
        <div class="col-sm-1">
          <img class="img-fluid" src="https://via.placeholder.com/150x150/{{ $colors[$note->owner_id - 1] }}/ffffff?text={{ $note->owner->initials() }}" alt="{{ $note->case->owner->initials() }}" />
	</div>
        <div class="col-sm-11">
	<form method="POST" action="{{ $note->path() }}" style="position:absolute;right:15px;">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
          <p style="margin-bottom:0;margin-right:2em;">{{ $note->content }}</p>
	  <small class="text-muted">Posted by <a href="{{ $note->owner->path() }}">{{ $note->owner->name }}</a> on {{ $note->created_at->toDayDateTimeString() }}</small>
	</div>	
      </div>	    
	    </li>

    @empty

    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          No case notes at this time.
        </div>
      </div>

    </div>

    @endforelse

          </ul>

        </div>
      </div>
    </div>

@endsection