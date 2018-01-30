@extends('layouts.main')

@section('title', 'Books')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Books</h1>
		    </div>
		    <div class="col-sm-3">
                        <a href="/books/create" class="btn btn-primary mt-3">Create Book</a>
		    </div>
		</div>

                <p class="lead">Reading!  Who likes reading?!</p>

                @foreach($books as $book)
                <article>
		    <div class="row">
		        <div class="col-sm-9">
			    <h2><a href="{{ $book->path() }}">{{ $book->title_display }}</a></h2>
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
			</div>
			<div class="col-sm-3">
			    <ul class="list-inline">
			        <li class="list-inline-item"><a href="{{ $book->path() }}">View</a></li>
			        @can('update', $book)
			        <li class="list-inline-item"><a href="{{ $book->path() . '/edit' }}">Edit</a></li>
			        @endcan
			        @can('delete', $book)
			        <li class="list-inline-item"><form method="POST" action="{{ $book->path() }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			        @endcan
			    </ul>
			</div>
		    </div>
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