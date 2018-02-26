@extends('layouts.admin')

@section('title', $client->name)

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="mt-3">{{ $client->name }}</h1>

		@if($client->phone)
		Phone: <a href="tel:{{ $client->phone }}">{{ $client->phone }}</a>
		<br />
		@endif
		@if($client->email)
		Email: <a href="mailto:{{ $client->email }}">{{ $client->email }}</a>
		<br />
		@endif
		@if($client->address1 || $client->address2 || $client->city || $client->province || $client->postalcode)
		Address: {{ $client->address1 . ', ' . $client->city . ', ' . $client->province->abbr . ' ' . $client->postal_code }}
		@endif

		@if($client->description)
		<p class="mt-3">{{ $client->description }}</p>
		@endif

		<h2>Active Cases</h2>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
	              <th scope="col">Name</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($client->activeCases as $case)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $case->path() }}">{{ $case->name }}</a></td>
		      <td>
		        <ul class="list-inline">
			  @can('update', $case)
			  <li class="list-inline-item"><a href="{{ $case->path() . '/edit' }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a></li>
			  @endcan
			  @if(!$case->date_settled_at)
  			  <li class="list-inline-item"><form method="POST" action="{{ $case->path() . '/settle' }}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-exchange-alt"></i></button></form></li>
			  @endif			  			  
			  @can('delete', $case)
			  <li class="list-inline-item"><form method="POST" action="/cases/{{ $case->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="3">No active cases at this time.</td>
		    </tr>
                @endforelse
		  </tbody>
		</table>

		<h2>Settled Cases</h2>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
	              <th scope="col">Name</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($client->settledCases as $case)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $case->path() }}">{{ $case->name }}</a></td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $case->path() }}">View</a></li>
			  @can('update', $case)
			  <li class="list-inline-item"><a href="{{ $case->path() . '/edit' }}">Edit</a></li>
			  @endcan
			  @if(!$case->date_settled_at)
  			  <li class="list-inline-item"><form method="POST" action="{{ $case->path() . '/settle' }}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-sm btn-primary">Settle</button></form></li>
			  @endif			  			  
			  @can('delete', $case)
			  <li class="list-inline-item"><form method="POST" action="/cases/{{ $case->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="3">No settled cases at this time.</td>
		    </tr>
                @endforelse
		  </tbody>
		</table>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection