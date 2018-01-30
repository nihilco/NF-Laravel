@extends('layouts.admin')

@section('title', 'Phone Numbers')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Phone Numbers</h1>
		    </div>
		    <div class="col-sm-3">
                        <a href="/phone-numbers/create" class="btn btn-primary mt-3">Create Phone Number</a>
		    </div>
		</div>

                <p class="lead">Here is a list of all phone numbers:</p>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
	              <th scope="col">Number</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($phoneNumbers as $phoneNumber)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $phoneNumber->path() }}">{{ $phoneNumber->number }}</a></td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $phoneNumber->path() }}">View</a></li>
			  <li class="list-inline-item"><a href="{{ $phoneNumber->path() . '/edit' }}">Edit</a></li>
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="3">No phone numbers at this time.</td>
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