@extends('layouts.main')

@section('title', 'Books')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Books</h1>
		</div>

                <p class="lead">Reading!  Who likes reading?!</p>

                @foreach($books as $book)
                <article>
                    <h2><a href="{{ $book->path() }}">{{ $book->title }}</a></h2>
		    <h3>by
		    <?php $c=1 ?>
		    @foreach($book->authors as $author)
		      @if($c > 1)
		      and 
		      @endif
		      <a href="{{ $author->path() }}">{{ $author->name() }}</a>
		      <?php $c++ ?>
		    @endforeach
		    </h3>
	            <p class="post-description">{!! $book->description !!}</p>
                </article>
                @endforeach

	    </div>
	    <div class="col-sm-4 col-md-3">

                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
	                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        <a href="#" class="btn btn-primary">Go somewhere</a>
		    </div>
		</div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
	                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		        <a href="#" class="btn btn-primary">Go somewhere</a>
		    </div>
		</div>

	    </div>
	</div>
    </div>

@endsection