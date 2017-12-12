@extends('layouts.main')

@section('title', 'Threads')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
	            <h1>Threads</h1>
		</div>

                <p class="lead">Threads for the forum.</p>

		<div class="row mt-3">
		  <div class="col-sm-5">
		    &nbsp;
		  </div>
		  <div class="col-sm-7">
		    <div class="row">
		      <div class="col-sm-4">
		      &nbsp;
		      </div>
		      <div class="col-sm-4">
		      Replies
		      </div>
		      <div class="col-sm-4">
		      Updated
		      </div>
		    </div>
		  </div>
		</div>
		@foreach($threads as $thread)
		<div class="row">
		  <div class="col-sm-5">
                    <h2><a href="{{ $thread->path() }}">{{ $thread->title }}</a></h2>
		    <p class="thread-content">{{ $thread->content }}</p>
		  </div>
		  <div class="col-sm-7">
		    <div class="row">
		      <div class="col-sm-4">
		      &nbsp;
		      </div>
		      <div class="col-sm-4">
		      {{ $thread->replies_count }}
		      </div>
		      <div class="col-sm-4">
		      {{ $thread->updated_at->diffForHumans() }}
		      </div>
		    </div>
		  </div>
                </div>
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

	      @include('forums.sidebar')

	    </div>
	</div>
    </div>

@endsection