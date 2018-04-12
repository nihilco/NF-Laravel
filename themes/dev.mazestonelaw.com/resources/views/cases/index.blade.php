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

<div class="container">

  <div class="row">

    <div class="col-sm-8">

      <h1 class="pt-3">{{ ucfirst($type) }} Cases</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Cases',
              'url' => '/cases',
          ],
          [
              'label' => ucfirst($type),
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\ClientCase::class)
      <a href="/cases/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Case</a>
      @endcan

    </div>

  </div>

  <div class="row pb-3">
    <div class="col-sm-6">
      @if($clientCases->total() > 0)
      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/cases?{{ ($type == 'active') ? 'active=true&' : '' }}{{ ($type == 'closed') ? 'closed=true&' : '' }}client=true">Client Name</a>
	      <a class="dropdown-item" href="/cases?{{ ($type == 'active') ? 'active=true&' : '' }}{{ ($type == 'closed') ? 'closed=true&' : '' }}case=true">Case Name</a>
	      <a class="dropdown-item" href="/cases?{{ ($type == 'active') ? 'active=true&' : '' }}{{ ($type == 'closed') ? 'closed=true&' : '' }}type=true">Case Type</a>
        </div>
      </div>
      @endif
    </div>
    <div class="col-sm-6 text-right">
      @if($clientCases->hasPages())
        {{ $clientCases->links() }}
      @endif
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
    @forelse($clientCases as $clientCase)

    <a href="{{ $clientCase->path() }}" class="list-group-item list-group-item-action flex-column align-items-start{{ ($clientCase->date_settled_at != null) ? '' : '' }}">
      <div class="row">
        <div class="col-sm-9">
          <h5 class="mb-1">{{ $clientCase->client->name }}</h5>
          <h6 class="mb-1">{{ $clientCase->county }} County <span class="badge badge-{{ $clientCase->type->color }}">{{ $clientCase->type->name }}</span></h6>
	    </div>
	    <div class="col-sm-3 text-right">
          <small>{{ $clientCase->notes()->first()->created_at->diffForHumans() }}</small>
	    </div>
      </div>
    </a>

    @empty          

    <p>No {{ $type }} cases at this time.</p>

    @endforelse
    </div>
  </div>

  @if($clientCases->hasPages())
  <div class="row">
    <div class="col-sm-12">
          {{ $clientCases->links() }}
    </div>
  </div>
  @endif

</div>

@endsection