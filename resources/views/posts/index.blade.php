@extends('layouts.admin')

@section('title', 'Posts')

@section('content')

<div class="container-fluid">

  <div class="row">
    
    <div class="col-sm-8">

      <h1>Posts</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Posts',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Post::class)
      <a href="/posts/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Post</a>
      @endcan

    </div>
    
  </div>

  <div class="row">

    @forelse($posts as $post)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $post->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($post->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <div class="col-sm-12">
      <p>No posts at this time.</p>
    </div>

    @endforelse
    
  </div>    

</div>
    
@endsection