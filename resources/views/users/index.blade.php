@extends('layouts.admin')

@section('title', 'Users')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Users</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Users',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\User::class)
      <a href="/users/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> User</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($users as $user)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300?text={{ $user->id }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $user->name }}</h5>
	  <h6>{{ $user->email }}</h6>
	  <p class="card-text">{!! \Illuminate\Support\Str::words($user->description, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty

    <p>No users at this time.</p>

    @endforelse

  </div>

  @if($users->hasPages())
  <div class="row">
    <div class="col-sm-12">
      {{ $users->links() }}
    </div>
  </div>
  @endif

</div>

@endsection