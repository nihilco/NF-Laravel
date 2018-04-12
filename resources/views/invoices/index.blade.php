@extends('layouts.admin')

@section('title', 'Invoices')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Invoices</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Invoices',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Invoice::class)
      <a href="/invoices/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Invoice</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($invoices as $invoice)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $invoice->id  }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ $invoice->path() }}">Invoice #{{ $invoice->id }}</a></h5>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No invoices at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection
