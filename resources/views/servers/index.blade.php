@extends('layouts.admin')

@section('title', 'Servers')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Servers</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Servers',
          ],
      ]])    

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Server::class)
      <a href="/servers/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Server</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($servers as $server)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $server->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $server->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($server->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No servers at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection