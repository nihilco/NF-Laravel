@extends('layouts.admin')

@section('title', 'Domians')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Domains</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Domains',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Domain::class)
      <a href="/resources/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Domain</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($domains as $domain)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $domain->tld }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($domain->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No domains at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection