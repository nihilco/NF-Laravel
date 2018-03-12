@extends('layouts.admin')

@section('title', 'Aliases')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Aliases</h1>

      <ul class="list-inline">
        <li class="list-inline-item"><a href="/"><i class="fas fa-home"></i></a></li>/
        <li class="list-inline-item"> Aliases</li>
      </ul>

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Alias::class)
      <a href="/aliases/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Alias</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($aliases as $alias)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $alias->title }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($alias->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No aliases at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection