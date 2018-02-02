@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Dashboard</h1>
		</div>

                <p class="lead">User dashboard.</p>

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
		@forelse($cases as $case)
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $case->client->path() }}">{{ $case->client->name }}</a></td>
		      <td>{{ $case->name }}</td>
		      <td>
		        <ul class="list-inline" style="margin-bottom:0;">
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
		      <td colspan="4">No active cases at this time.</td>
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