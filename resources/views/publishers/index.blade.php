@extends('layouts.admin')

@section('title', 'Publishers')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Publishers</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Publishers',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Publisher::class)
      <a href="/publishers/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Publisher</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($publishers as $publisher)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $publisher->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($publisher->description, 25,'...')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No publishers at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection