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

		{{ $books->links('vendor.pagination.bootstrap-4') }}

	    </div>
	    <div class="col-sm-4 col-md-3">

	      @include('books.sidebar')

	    </div>
	</div>
    </div>

@endsection