@extends('layouts.admin')

@section('title', 'Websites')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Websites</h1>
		    </div>
		    <div class="col-sm-3 text-right">
                        <a href="/websites/create" class="btn btn-primary mt-3">Create Website</a>
		    </div>
		</div>

                <p class="lead">Here is a list of all websites:</p>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
	              <th scope="col">Hostname</th>
		      <th scope="col">Title</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($websites as $website)
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td>{{ $website->hostname }}</td>
      		      <td>{{ $website->title }}</td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $website->path() }}">View</a></li>
			  @can('update', $website)
			  <li class="list-inline-item"><a href="{{ $website->path() . '/edit' }}">Edit</a></li>
			  @endcan
			  @can('delete', $website)
			  <li class="list-inline-item"><form method="POST" action="/websites/{{ $website->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="4">No websites at this time.</td>
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