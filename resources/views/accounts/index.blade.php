@extends('layouts.admin')

@section('title', 'Accounts')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Accounts</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Accounts',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Account::class)
      <a href="/accounts/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Account</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($accounts as $account)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $account->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $account->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($account->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No accounts at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection