@extends('layouts.main')

@section('title', 'Forums')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Forums</h1>
		</div>

                <p class="lead">Forums for the blog.</p>

                @foreach($channels as $channel)
		<div class="row mt-3">
		  <div class="col-sm-5">
		    <h2>{{ $channel->title }}</h2>
		    <p>{{ $channel->desciption }}</p>
		  </div>
		  <div class="col-sm-7">
		    <div class="row">
		      <div class="col-sm-4">
		      Threads
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
		@foreach($channel->forums as $forum)
		<div class="row">
		  <div class="col-sm-5">
                    <h3><a href="{{ $forum->path() }}">{{ $forum->title }}</a></h3>
		  </div>
		  <div class="col-sm-7">
		    <div class="row">
		      <div class="col-sm-4">
		      {{ $forum->threads_count }}
		      </div>
		      <div class="col-sm-4">
		      {{ $forum->replies_count }}
		      </div>
		      <div class="col-sm-4">
		      {{ $forum->updated_at->diffForHumans() }}
		      </div>
		    </div>
		  </div>
                </div>
		@endforeach
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

	      @include('forums.sidebar')

	    </div>
	</div>
    </div>

@endsection