@extends('layouts.admin')

@section('title', $clientCase->name)

@section('content')

    <div class="container-fluid page-top" style="background:lightgray;">
      <div class="container">
        <div class="row" >
          <div class="col-sm-12">

            <h1 class="mt-3">{{ $clientCase->name }}</h1>

            <p class="">{{ $clientCase->description }}</p>

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

    @forelse($clientCase->notes() as $note)

    <div class="container">

      <div class="row case-note">
        <div class="col-sm-12">
	<form method="POST" action="{{ $note->path() }}" style="position:absolute;right:15px;">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
          <p style="margin-bottom:0;margin-right:2em;">{{ $note->content }}</p>
	  <small class="text-muted">Posted by <a href="{{ $note->owner->path() }}">{{ $note->owner->name }}</a> on {{ $note->created_at->toDayDateTimeString() }}</small>
	</div>	
      </div>

    </div>

    @empty

    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          No case notes at this time.
        </div>
      </div>

    </div>

    @endforelse

@endsection