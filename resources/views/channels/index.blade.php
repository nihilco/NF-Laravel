@extends('layouts.admin')

@section('title', 'Channels')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Channels</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Channels',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Channel::class)
      <a href="/channels/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Channel</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($channels as $channel)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $channel->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $channel->title }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($channel->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No channels at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection