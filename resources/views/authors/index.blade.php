@extends('layouts.admin')

@section('title', 'Authors')

@section('content')

<div class="container-fluid">

  <div class="row">
  
    <div class="col-sm-8">

      <h1>Authors</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Authors',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Author::class)
      <a href="/authors/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Author</a>
      @endcan

    </div>
    
  </div>

  <div class="row">

    @forelse($authors as $author)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $author->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $author->first_name . ' ' . $author->last_name }}</h5>
	      <p class="card-text">{!! \Illuminate\Support\Str::limit($author->description, 150,'...')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <p>No authors at this time.</p>

    @endforelse
    
  </div>

  @if($authors->hasPages())
  <div class="row">
    <div class="col-sm-12">
      {{ $authors->links() }}
    </div>
  </div>
  @endif

</div>
    
@endsection