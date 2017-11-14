@extends('layouts.main')

@section('title', 'Contact')

@section('content')

    <div class="container page-top">

        <div class="row pt-3">
            <div class="col-sm-8 col-md-9">

	        <h1>Contact</h1>

                <p class="lead">Complete the following form:</p>

		<form method="POST" action="/contact">
		    <div class="form-group">
		        <label for="email">Email</label>
		        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="jsmith@example.com">
		        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	            </div>
	  	    <div class="form-group">
		        <label for="name">Name</label>
			<input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="John Smith">
			<small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		    </div>
		    <div class="form-group">
		        <label for="message">Message</label>
                	<textarea class="form-control" id="message" rows="5"></textarea>
			<small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		    </div>
		    <button type="submit" class="btn btn-primary">Contact Us</button>
		</form>

            </div>
	</div>

        <div class="col-sm-4 col-md-3">

     

        </div>

    </div>

@endsection