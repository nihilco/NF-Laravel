@extends('layouts.admin')

@section('title', 'Statuses')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Statuses</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Statuses',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Status::class)
      <a href="/statuses/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Status</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($statuses as $status)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $status->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $status->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($status->description, 25,'...')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No statuses at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection