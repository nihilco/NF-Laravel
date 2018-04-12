<?php
  $colors = ['007bff', '6c757d', 'ffc107', '28a745'];
?>

@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="container">

  <div class="row">

    <div class="col-sm-8">

      <h1 class="pt-3">Dashboard</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Dashboard',
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
      @if($caseNotes->total() > 0)
      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter
        </button>
        <div class="dropdown-menu">

        </div>
      </div>
      @endif
    </div>
    <div class="col-sm-6 text-right">
      @if($caseNotes->hasPages())
        {{ $caseNotes->links() }}
      @endif
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">

                <ul class="list-group">

		@forelse($caseNotes as $note)

                  <li class="list-group-item">

      <div class="row case-note">
        <div class="col-sm-1">
          <img class="img-fluid" src="https://via.placeholder.com/150x150/{{ $colors[$note->owner_id - 1] }}/ffffff?text={{ $note->owner->initials() }}" alt="{{ $note->case->owner->initials() }}" />
	</div>
        <div class="col-sm-11">
	<form method="POST" action="{{ $note->path() }}" style="position:absolute;right:15px;">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                                                                                                                 <h6><a href="{{ $note->case->path() }}">{{ $note->case->client->name }}</a> - <a href="{{ $note->case->path() }}">{{ $note->case->county . ' County' }} <span class="badge badge-{{ $note->case->type->color }}">{{ $note->case->type->name }}</span></a></h6>
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

  @if($caseNotes->hasPages())
  <div class="row">
    <div class="col-sm-12">
          {{ $caseNotes->links() }}
    </div>
  </div>
  @endif

</div>

@endsection