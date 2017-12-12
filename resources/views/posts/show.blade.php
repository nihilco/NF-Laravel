@extends('layouts.main')

@section('title', $post->title)

@section('content')

    <div class="container page-top">

        <div class="row pt-3">
	    <div class="col-sm-8 col-md-9">

	        <h1>{{ $post->title }}</h1>

                <p class="lead">{{ $post->description }}</p>

		<h2>Replies</h2>

		@forelse($post->replies as $reply)
                <article>
	            <p class="reply-content">{{ $reply->content }}</p>
                </article>
		@empty
		<p>No replies at this time.</p>
		@endforelse

		@if(auth()->check())
		<div class="row">
		    <div class="col-sm-12">

		        <form method="POST" action="{{ $post->path() . '/replies' }}">
                            {{ csrf_field() }}
                            <div class="form-group">
	                        <label for="content">Leave a reply</label>
	                        <textarea class="form-control{{ $errors->first('content') ? ' is-invalid' : '' }}" id="content" name="content" aria-describedby="contentHelp" rows="5">{{ old('content') }}</textarea>
	                        @if($errors->first('content'))
	                        <small id="contentHelp" class="invalid-feedback">{{ $errors->first('content') }}</small>
	                        @endif
	                    </div>

   	                    <button type="submit" class="btn btn-primary">Reply</button>
	
                        </form>

		    </div>
		</div>
		@endif

	    </div>
	    <div class="col-sm-4 col-md-3">

	      @include('blog.sidebar')

	    </div>
	</div>
    </div>

@endsection