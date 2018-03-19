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

    @forelse($books as $book)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/300x450?text={{ $book->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $book->title_display }}</h5>
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