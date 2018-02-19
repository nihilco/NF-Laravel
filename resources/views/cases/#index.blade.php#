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

                <div class="row mb-1">
                  <div class="col-sm-12 text-right">

                    <div class="dropdown">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter
                      </button>
	              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
	                <a class="dropdown-item" href="#">Client Name</a>
	                <a class="dropdown-item" href="#">Case Name</a>
		        <a class="dropdown-item" href="#">Case Type</a>
      		        <a class="dropdown-item" href="#">Last Update</a>
		      </div>
		    </div>

                  </div>
                </div>

		<div class="row">
		  <div class="col-sm-12">

                    <div class="list-group">

   	            @forelse($clientCases as $clientCase)

                      <a href="{{ $clientCase->path() }}" class="list-group-item list-group-item-action flex-column align-items-start{{ ($clientCase->date_settled_at != null) ? '' : '' }}">
                        <div class="row">
                          <div class="col-sm-1">
                            <img class="img-fluid" src="http://via.placeholder.com/150x150?text={{ $clientCase->owner->initials() }}" alt="{{ $clientCase->owner->initials() }}" />
                          </div>
                          <div class="col-sm-8">
                            <h5 class="mb-1">{{ $clientCase->client->name }}</h5>
                            <h6 class="mb-1">{{ $clientCase->name }} <span class="badge badge-secondary">New</span></h6>
	                  </div>
	                  <div class="col-sm-3">
                            <small>{{ $clientCase->notes()->first()->created_at->diffForHumans() }}</small>
	                  </div>
                        </div>
                      </a>

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

	    </div>
	</div>
    </div>

@endsection