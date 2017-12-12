@extends('layouts.main')

@section('title', $thread->title)

@section('content')

    <div class="container page-top pb-3">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row mt-3">
		    <div class="col-sm-8">
	                <div>
	                    <h1>{{ $thread->title }}</h1>
		            <h5>{{ $thread->created_at->diffForHumans() }} by <a href="{{ $thread->creator->path() }}">{{ $thread->creator->name }}</a>.  Currently has {{ $thread->replies_count . ' ' . str_plural('reply', $thread->replies_count) }}.</h5>
		        </div>
		    </div>
		    <div class="col-sm-4 text-right">
			<follow :resource="{{ $thread }}"></follow>
		        @can('delete', $thread)
		        <form method="POST" action="{{ $thread->path() }}">
			    {{ csrf_field() }}
			    {{ method_field('DELETE') }}
			    <button type="submit" class="btn btn-danger">Delete</button>
			</form>
			@endcan
		    </div>
		</div>

                <p class="lead">{{ $thread->content }}</p>

		<h2>Replies</h2>

		<replies :resource="{{ $thread }}"></replies>

	    </div>
	    <div class="col-sm-4 col-md-3">

	        @include('forums.sidebar')

	    </div>
	</div>
    </div>

@endsection