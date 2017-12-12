@extends('layouts.main')

@section('title', $channel->title)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
	            <h1>{{ $channel->title }}</h1>
		</div>

                <p class="lead">{{ $channel->description }}</p>

		<div class="row mt-3">
		  <div class="col-sm-5">
		    <h2>Forums</h2>
		  </div>
		  <div class="col-sm-7">
		    <div class="row">
		      <div class="col-sm-4">
		      &nbsp;
		      </div>
		      <div class="col-sm-4">
		      Forums
		      </div>
		      <div class="col-sm-4">
		      Updated
		      </div>
		    </div>
		  </div>
		</div>
		@foreach($channel->forums as $forum)
		<div class="row">
		  <div class="col-sm-5">
                    <h3><a href="{{ $forum->path() }}">{{ $forum->title }}</a></h3>
		    <p class="forum-description">{{ $forum->description }}</p>
		  </div>
		  <div class="col-sm-7">
		    <div class="row">
		      <div class="col-sm-4">
		      &nbsp;
		      </div>
		      <div class="col-sm-4">
		      {{ $forum->threads_count }}
		      </div>
		      <div class="col-sm-4">
		      {{ $forum->updated_at->diffForHumans() }}
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