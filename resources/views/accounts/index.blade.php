@extends('layouts.admin')

@section('title', 'Accounts')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Accounts</h1>
		    </div>
		    <div class="col-sm-3">
                        <a href="/accounts/create" class="btn btn-primary mt-3">Create Account</a>
		    </div>
		</div>

                <p class="lead">Here is a list of all accounts:</p>

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
		@forelse($accounts as $account)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $account->path() }}">{{ $account->name }}</a></td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $account->path() }}">View</a></li>
			  @can('update', $account)
			  <li class="list-inline-item"><a href="{{ $account->path() . '/edit' }}">Edit</a></li>
			  @endcan
			  @can('delete', $account)
			  <li class="list-inline-item"><form method="POST" action="/accounts/{{ $account->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="3">No accounts at this time.</td>
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