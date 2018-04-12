@extends('layouts.admin')

@section('title', 'Pages')

@section('content')

<div class="container-fluid">

  <div class="row">
    
    <div class="col-sm-8">

      <h1>Pages</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Pages',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Page::class)
      <a href="/pages/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Page</a>
      @endcan

    </div>
    
  </div>

  <div class="row">

    @forelse($pages as $page)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $page->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ $page->path() }}">{{ $page->title }}</a></h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($page->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <div class="col-sm-12">
      <p>No pages at this time.</p>
    </div>

    @endforelse
    
  </div>
    
</div>

@endsection