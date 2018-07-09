@extends('layouts.main')

@section('title', 'Contact')

@section('content')

    <div class="container page-top">

        <div class="row">
            <div class="col">
	            <div class="mt-3">
    	            <h1>Contact</h1>
		        </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-6">

                <p class="lead">Complete the following form:</p>

		        <form method="POST" action="/contact">
		            {{ csrf_field() }}
		            <div class="form-group">
		                <label for="name">Name</label>
			            <input
                            type="text"
                            class="form-control {{ $errors->first('name') ? ' is-invalid' : '' }}"
                            id="name"
                            name="name"
                            aria-describedby="nameHelp"
                            placeholder="John Smith"
                            value="{{ old('name') }}"
                        />
			            @if($errors->first('name'))
			                <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
			            @endif
		            </div>
		    <div class="form-group">
		        <label for="email">Email</label>
		        <input type="email" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" placeholder="jsmith@example.com" value="{{ old('email') }}">
			@if($errors->first('email'))
			<small id="emailHelp" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
			@endif
	            </div>
	  	    <div class="form-group">
		        <label for="name">Phone</label>
			<input type="text" class="form-control {{ $errors->first('phone') ? ' is-invalid' : '' }}" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="(123) 456-7890" value="{{ old('phone') }}">
			@if($errors->first('phone'))
			<small id="phoneHelp" class="form-text invalid-feedback">{{ $errors->first('phone') }}</small>
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

    <div class="col-sm-6">

<div class="embed-responsive embed-responsive-1by1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208917.77311382972!2d-85.37877411029397!3d35.09821494087526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886060408a83e785%3A0x2471261f898728aa!2sChattanooga%2C+TN!5e0!3m2!1sen!2sus!4v1531175081549" width="600" height="600" frameborder="0" style="border:0" class="embed-responsive-item" allowfullscreen></iframe>
    </div>
    
    </div>

    </div>

    </div>

@endsection