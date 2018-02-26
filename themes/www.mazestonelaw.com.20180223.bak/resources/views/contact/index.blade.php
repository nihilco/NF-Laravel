@extends('layouts.main')

@section('title', 'Contact')

@section('content')

    <div class="container page-top">

        <div class="row pt-3 pb-3">
            <div class="col-sm-8">

	        <h1>Contact</h1>

                <p class="lead justify">To schedule a FREE case consultation, please complete the intake form below. Any information provided
		will be kept strictly confidential.</p>

		<form method="POST" action="/contact">
		{{ csrf_field() }}
	  	    <div class="form-group">
		        <label for="name">Name</label>
			<input type="text" class="form-control {{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" placeholder="John Smith" value="{{ old('name') }}">
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

            <div class="col-sm-4">

            	 <dl class="row">
	    	    <dt class="col-sm-3">Phone:</dt>
		    <dd class="col-sm-9"><a href="tel:18598829999" target="_blank">(859) 882-9999</a></dd>
                    <dt class="col-sm-3">Fax:</dt>
	            <dd class="col-sm-9"><a href="tel:18598781769" target="_blank">(859) 878-1769</a></dd>
         	    <dt class="col-sm-3">Email:</dt>
	    	    <dd class="col-sm-9"><a href="mailto:contact@mazestonelaw.com" target="_blank">contact@mazestonelaw.com</a></dd>
                    <dt class="col-sm-3">Address:</dt>
	            <dd class="col-sm-9"><a href="https://goo.gl/maps/4r7oEKLAiAK2" target="_blank">127 West High Street<br />Mount Sterling, KY 40353</a></dd>
	        </dl>

		<div class="embed-responsive embed-responsive-1by1">		
		    <iframe class="embed-responsive-item"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3141.5681755189385!2d-83.9475811846742!3d38.05714707970902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8843bdece21511c9%3A0xee6abff24e84cfda!2s127+W+High+St%2C+Mt+Sterling%2C+KY+40353!5e0!3m2!1sen!2sus!4v1513006309774" width="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

	    </div>

        </div>

    </div>

@endsection