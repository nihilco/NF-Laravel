@extends('layouts.admin')

@section('title', 'Subscriptions')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Subscriptions</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Subscriptions',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Subscription::class)
      <a href="/subscriptions/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Subscription</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($subscriptions as $subscription)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Subscription #{{ $subscription->id }}</h5>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No subscriptions at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection