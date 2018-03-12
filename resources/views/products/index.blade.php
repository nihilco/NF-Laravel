@extends('layouts.admin')

@section('title', 'Products')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Products</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Products',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Product::class)
      <a href="/products/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Product</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($products as $product)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $product->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($product->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No products at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection