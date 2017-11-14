@extends('layouts.main')

@section('title', 'Contact')

@section('content')

    <div class="container page-top">

        <div class="row">
            <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
    	            <h1>Contact</h1>
		</div>

                <p class="lead">Complete the following form:</p>

		<form method="POST" action="/contact">
		{{ csrf_field() }}
		    <div class="form-group">
		        <label for="email">Email</label>
		        <input type="email" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" placeholder="jsmith@example.com" value="{{ old('email') }}">
			@if($errors->first('email'))
			<small id="emailHelp" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
			@endif
	            </div>
	  	    <div class="form-group">
		        <label for="name">Name</label>
			<input type="text" class="form-control {{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" placeholder="John Smith" value="{{ old('name') }}">
			@if($errors->first('name'))
			<small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
			@endif
		    </div>
		    <div class="form-group">
		        <label for="message">Message</label>
                	<textarea class="form-control{{ $errors->first('message') ? ' is-invalid' : '' }}" id="message" rows="5" name="message" placeholder="I have something to say...">{{ old('message') }}</textarea>
			@if($errors->first('message'))
			<small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
			@endif
		    </div>
		    <button type="submit" class="btn btn-primary">Contact Us</button>
		</form>

            </div>
	</div>

        <div class="col-sm-4 col-md-3">

     

        </div>

    </div>

@endsection