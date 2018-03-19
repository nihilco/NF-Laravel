@extends('layouts.admin')

@section('title', 'Topics')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Topics</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Topics',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Topic::class)
      <a href="/topics/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Topic</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($topics as $topic)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $topic->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $topic->title }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($topic->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No topics at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection