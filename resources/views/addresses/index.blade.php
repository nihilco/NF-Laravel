@extends('layouts.admin')

@section('title', 'Addresses')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Addresses</h1>
		    </div>
		    <div class="col-sm-3">
                        <a href="/addresses/create" class="btn btn-primary mt-3">Create Address</a>
		    </div>
		</div>

                <p class="lead">Here is a list of all addresses:</p>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
	              <th scope="col">Address</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($addresses as $address)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $address->path() }}">{{ $address->address1 }}</a></td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $address->path() }}">View</a></li>
			  <li class="list-inline-item"><a href="{{ $address->path() . '/edit' }}">Edit</a></li>
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="3">No addresses at this time.</td>
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