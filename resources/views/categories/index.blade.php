@extends('layouts.admin')

@section('title', 'Categories')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Categories</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Categories',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Category::class)
      <a href="/categories/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Categories</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($categories as $category)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $category->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($category->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No categories at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection