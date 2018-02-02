@extends('layouts.admin')

@section('title', 'Cases')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Cases</h1>
		    </div>
		    <div class="col-sm-3 text-right">
                        <a href="/cases/create" class="btn btn-primary mt-3">Create Case</a>
		    </div>
		</div>

                <p class="lead">Here is a list of all cases:</p>

		<h2>Active Cases</h2>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
		      <th scope="col">Client</th>
	              <th scope="col">Case Name</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($clientCases->where('date_settled_at', '=', null) as $clientCase)
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $clientCase->client->path() }}">{{ $clientCase->client->name }}</a></td>
		      <td>{{ $clientCase->name }}</td>
		      <td>
		        <ul class="list-inline" style="margin-bottom:0;">
			  <li class="list-inline-item"><a href="{{ $clientCase->path() }}">View</a></li>
			  @can('update', $clientCase)
			  <li class="list-inline-item"><a href="{{ $clientCase->path() . '/edit' }}">Edit</a></li>
			  @endcan
			  @if(!$clientCase->date_settled_at)
  			  <li class="list-inline-item"><form method="POST" action="{{ $clientCase->path() . '/settle' }}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-sm btn-primary">Settle</button></form></li>
			  @endif			  
			  @can('delete', $clientCase)
			  <li class="list-inline-item"><form method="POST" action="/cases/{{ $clientCase->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="4">No cases at this time.</td>
		    </tr>
                @endforelse
		  </tbody>
		</table>

		<h2>Settled Cases</h2>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
		      <th scope="col">Client</th>
	              <th scope="col">Case Name</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($clientCases->where('date_settled_at', '!=', null) as $clientCase)
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $clientCase->client->path() }}">{{ $clientCase->client->name }}</a></td>
		      <td>{{ $clientCase->name }}</td>
		      <td>
		        <ul class="list-inline" style="margin-bottom:0;">
			  <li class="list-inline-item"><a href="{{ $clientCase->path() }}">View</a></li>
			  @can('update', $clientCase)
			  <li class="list-inline-item"><a href="{{ $clientCase->path() . '/edit' }}">Edit</a></li>
			  @endcan
			  @if(!$clientCase->date_settled_at)
  			  <li class="list-inline-item"><form method="POST" action="{{ $clientCase->path() . '/settle' }}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-sm btn-primary">Settle</button></form></li>
			  @endif			  
			  @can('delete', $clientCase)
			  <li class="list-inline-item"><form method="POST" action="/cases/{{ $clientCase->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="4">No cases at this time.</td>
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