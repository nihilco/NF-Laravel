@extends('layouts.admin')

@section('title', 'Orders')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Orders</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Orders',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Order::class)
      <a href="/orders/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Order</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($orders as $order)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Order #{{ $order->id }}</h5>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No orders at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection
