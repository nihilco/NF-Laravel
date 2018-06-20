@extends('layouts.main')

@section('title', 'Contact')

@section('content')

    <div class="container page-top">

        <div class="row">
            <div class="col-sm-6">

	            <div class="mt-3">
    	            <h1>Contact</h1>
		        </div>

                <p class="lead">Complete the following form:</p>

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
            <div class="col-sm-6">

                <div class="row" style="padding-top:3rem;">
                    <div class="col-6">
    
        <address>
          <strong class="font-green">The Taraloka Foundation</strong><br>
          705 Northern Avenue<br />
    Signal Mountain, TN 37377<br />
        </address>
        </div>
        <div class="col-6">
        <address>
          <strong class="font-green">The Sikkim Happiness Home</strong><br>
    Gangtok, Sikkim<br />
          India<br />
        </address>
    
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
    <div class="embed-responsive embed-responsive-4by3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1816976.7652512228!2d88.3752781973191!3d27.19456428542012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6a56a5805eafb%3A0x73d6132c501c8f20!2sGangtok%2C+Sikkim%2C+India!5e0!3m2!1sen!2sus!4v1408766346518" width="100%" height="450" frameborder="0" style="border:0" class="embed-responsive-item"></iframe>
    </div>
                    </div>
                </div>

        </div>
    </div>

    </div>

@endsection