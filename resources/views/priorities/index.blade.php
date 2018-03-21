@extends('layouts.admin')

@section('title', 'Priorities')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Priorities</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Priorities',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Priority::class)
      <a href="/priorities/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Priority</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($priorities as $priority)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $priority->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $priority->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($priority->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No priorities at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection