@extends('layouts.main')

@section('title', 'Posts')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Posts</h1>
		</div>

                <p class="lead">Posts for the blog.</p>

                @foreach($posts as $post)
                <article>
                    <h2><a href="{{ $post->path() }}">{{ $post->title }}</a></h2>
	            <p class="post-description">{{ $post->description }}</p>
                </article>
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

	      @include('blog.sidebar')

	    </div>
	</div>
    </div>

@endsection