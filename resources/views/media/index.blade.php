@extends('layouts.admin')

@section('title', 'Media')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Media</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Media',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Media::class)
      <a href="/media/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Media</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($media as $file)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $file->title }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($file->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <div class="col-sm-12">
      <p>No media at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection