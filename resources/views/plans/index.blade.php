@extends('layouts.admin')

@section('title', 'Plans')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Plans</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Plans',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Plan::class)
      <a href="/plans/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Plan</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($plans as $plan)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $plan->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($plan->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No plans at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection