@extends('layouts.admin')

@section('title', 'Domains')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row">
		    <div class="col-sm-9">
                        <h1 class="pt-3">Domains</h1>
		    </div>
		    <div class="col-sm-3 text-right">
                        <a href="/domains/create" class="btn btn-primary mt-3">Create Domain</a>
		    </div>
		</div>

                <p class="lead">Here is a list of all domains:</p>

		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
                      <th scope="col">#</th>
	              <th scope="col">TLD</th>
     	              <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		    $c=1;
		  ?>
		@forelse($domains as $domain)		  
		    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $domain->path() }}">{{ $domain->tld }}</a></td>
		      <td>
		        <ul class="list-inline">
			  <li class="list-inline-item"><a href="{{ $domain->path() }}">View</a></li>
			  @can('update', $domain)
			  <li class="list-inline-item"><a href="{{ $domain->path() . '/edit' }}">Edit</a></li>
			  @endcan
			  @can('delete', $domain)
			  <li class="list-inline-item"><form method="POST" action="/domains/{{ $domain->id }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>
		    <?php
		      $c++;
		    ?>
		@empty
		    <tr>
		      <td colspan="3">No domains at this time.</td>
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