@extends('layouts.admin')

@section('title', 'Threads')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Threads</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Threads',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Thread::class)
      <a href="/threads/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Thread</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($threads as $thread)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $thread->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $thread->title }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($thread->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No threads at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection