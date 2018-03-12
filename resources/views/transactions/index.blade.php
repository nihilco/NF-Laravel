@extends('layouts.admin')

@section('title', 'Transactions')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Transactions</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
            [
                'label' => 'Transactions',
            ],
        ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Transaction::class)
      <a href="/transactions/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Transaction</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($transactions as $transaction)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Transaction #{{ $transaction->id }}</h5>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No transactions at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection