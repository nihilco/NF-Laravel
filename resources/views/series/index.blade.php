@extends('layouts.admin')

@section('title', 'Series')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Series</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Series',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Series::class)
      <a href="/series/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Series</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($series as $s)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $s->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($s->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <p>No series at this time.</p>

    @endforelse
    
  </div>

</div>

@endsection