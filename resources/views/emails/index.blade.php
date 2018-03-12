@extends('layouts.admin')

@section('title', 'Emails')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Emails</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Emails',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Email::class)
      <a href="/emails/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Email</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($emails as $email)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $email->subject }}</h5>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No emails at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection