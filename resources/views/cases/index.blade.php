<?php

  if(request('active')=='true')
  {
      $type = 'active';
  }
  elseif(request('closed')=='true')
  {
      $type = 'closed';
  }
  else
  {
      $type = 'all';
  }

?>
@extends('layouts.admin')

@section('title', 'Cases')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-12">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">{{ ucfirst($type) }} Cases</h1>
		    </div>
		    <div class="col-sm-3 text-right">
                        <a href="/cases/create" class="btn btn-primary mt-3">Create Case</a>
		    </div>
		</div>

   	        @forelse($clientCases as $clientCase)

		<div class="row case">
		<div class="col-sm-2 col-md-1">
		  owner
		</div>
		<div class="col-sm-6 col-md-8">
		  <h5><a href="{{ $clientCase->client->path() }}">{{ $clientCase->client->name }}</a></h5>
		  <h6><a href="{{ $clientCase->path() }}">{{ $clientCase->name }}</a> <span class="badge badge-secondary">New</span></h6>
		</div>
		<div class="col-sm-4 col-md-3 text-right">
		  <small>Last updated:
		    <b>{{ $clientCase->notes()->first()->created_at->diffForHumans() }}</b><br />
		    by <a href="{{ $clientCase->owner->path() }}">{{ $clientCase->owner->name }}</a>
		  </small>
		</div>
		</div>

                @empty
		<div class="row">
		  <div class="col-sm-12">
 	            <p>No {{ $type }} cases at this time.</p>
		  </div>
		</div>
                @endforelse

	    </div>
	</div>
    </div>

@endsection