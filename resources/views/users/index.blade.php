@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Users</h1>
		</div>

                <p class="lead">Users did what?!</p>

                @foreach($users as $user)
		<div class="row mt-3">
		  <div class="col-sm-12">
		    <h2>{{ $user->username }}</h2>
		  </div>
		</div>
		@endforeach

		{{ $users->links('vendor.pagination.bootstrap-4') }}

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>
    
@endsection