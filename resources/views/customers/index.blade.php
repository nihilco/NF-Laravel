@extends('layouts.admin')

@section('title', 'Customers')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Customers</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Customers',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Customer::class)
      <a href="/customers/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Customer</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($customers as $customer)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $customer->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $customer->name }}</h5>
	  <p class="card-text">{!! \Illuminate\Support\Str::words($customer->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <p>No customers at this time.</p>

    @endforelse
    
  </div>

  @if($customers->hasPages())
  <div class="row">
    <div class="col-sm-12">
      {{ $customers->links() }}
    </div>
  </div>
  @endif

</div>

@endsection