@extends('layouts.admin')

@section('title', 'Provinces')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Provinces</h1>
		    </div>
		    <div class="col-sm-3">
                        <a href="/provinces/create" class="btn btn-primary mt-3">Create Province</a>
		    </div>
		</div>

                <p class="lead">Here is a list of all provinces:</p>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
	              <th scope="col">Abbr</th>
		      <th scope="col">Name</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($provinces as $province)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td>{{ $province->abbr }}</td>
		      <td><a href="{{ $province->path() }}">{{ $province->name }}</a></td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $province->path() }}">View</a></li>
			  @can('update', $province)
			  <li class="list-inline-item"><a href="{{ $province->path() . '/edit' }}">Edit</a></li>
			  @endcan
			  @can('delete', $province)
			  <li class="list-inline-item"><form method="POST" action="/provinces/{{ $province->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="4">No provinces at this time.</td>
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