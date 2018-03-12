@extends('layouts.admin')

@section('title', 'Tutorials')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Tutorials</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Tutorials',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Tutorial::class)
      <a href="/tutorials/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Tutorial</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($tutorials as $tutorial)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $tutorial->title }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($tutorial->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <p>No tutorials at this time.</p>

    @endforelse
    
  </div>

</div>

@endsection