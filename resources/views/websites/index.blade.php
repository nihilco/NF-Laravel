@extends('layouts.admin')

@section('title', 'Websites')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Websites</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Websites',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Website::class)
      <a href="/websites/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Website</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($websites as $website)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $website->hostname }}</h5>
          <h6 class="card-subtitle">{{ $website->title }}</h6>
          <p class="card-text">{!! \Illuminate\Support\Str::words($website->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No websites at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection