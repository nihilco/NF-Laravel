@extends('layouts.admin')

@section('title', 'Types')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Types</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Types',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Type::class)
      <a href="/types/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Type</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($types as $type)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $type->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $type->name }}</h5>
          <p class="card-text">{!! \Illuminate\Support\Str::words($type->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No types at this time.</p>
    </div>

    @endforelse
    
  </div>

</div>

@endsection