@extends('layouts.admin')

@section('title', 'Customers')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Customers</h1>
		    </div>
		    <div class="col-sm-3">
		        @can('create', \App\Models\Customer::class)
                        <a href="/customers/create" class="btn btn-primary mt-3">Create Customer</a>
			@endcan
		    </div>
		</div>

                <p class="lead">Here is a list of all customers:</p>

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
		@forelse($customers as $customer)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td>{{ $customer->name }}</td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $customer->path() }}">View</a></li>
			  <li class="list-inline-item"><a href="{{ $customer->path() . '/edit' }}">Edit</a></li>
 			  <li class="list-inline-item"><form method="POST" action="/customers/{{ $customer->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="3">No customers at this time.</td>
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