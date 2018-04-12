@extends('layouts.admin')

@section('title', 'Books')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Books</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Books',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Book::class)
      <a href="/books/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Book</a>
      @endcan

    </div>

  </div>

  <div class="row">
    <div class="col-sm-6">

      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
    
    </div>
    <div class="col-sm-6 text-right">
      @if($books->hasPages())
        {{ $books->links() }}
      @endif
    </div>
  </div>

  <div class="row">

    @forelse($books as $book)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/300x450?text={{ $book->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ $book->path() }}">{{ $book->title_display }}</a></h5>
          <p class="card-text">{!! \Illuminate\Support\Str::limit($book->description, 150,'...')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <p>No books at this time.</p>

    @endforelse
    
  </div>

  @if($books->hasPages())
  <div class="row">
    <div class="col-sm-12">
          {{ $books->links() }}
    </div>
  </div>
  @endif

</div>

@endsection