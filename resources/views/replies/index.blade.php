@extends('layouts.admin')

@section('title', 'Replies')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Replies</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Replies',
          ],
      ]])    
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Reply::class)
      <a href="/replies/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Reply</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($replies as $reply)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{!! \Illuminate\Support\Str::words($reply->content, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No replies at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection