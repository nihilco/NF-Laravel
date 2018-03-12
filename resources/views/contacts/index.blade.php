@extends('layouts.admin')

@section('title', 'Contacts')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Contacts</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Contacts',
          ],
      ]])
    
    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Contact::class)
      <a href="/contacts/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Contact</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($contacts as $contact)

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $contact->name }}</h5>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No contacts at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection