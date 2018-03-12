@extends('layouts.admin')

@section('title', 'Resolutions')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Resolutions</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Resolutions',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Resolution::class)
      <a href="/resolutions/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Resolution</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($resolutions as $resolution)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $resolution->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($resolution->description, 25,'...')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No resolutions at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection