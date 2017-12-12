@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container padded">
      <div class="row">
	<div class="col-sm-6">

	  <h1>Welcome</h1>

<p class="justify">Maze & Stone, PLLC is a Central Kentucky law firm that handles a wide range of legal issues, including serious personal injury cases, car, truck, and motorcycle accidents, criminal defense, DUIs, workers’ compensation, estate planning, bankruptcy, and divorce. No matter your legal issue, the attorneys at Maze & Stone are well-equipped to guide you through the often confusing and complicated legal process.</p>

<p class="justify">Frequently, the biggest complaint that clients have with a law office is: “MY ATTORNEY NEVER RETURNS MY CALLS” or their questions and communications are deferred to secretaries and staff.  When deciding who you should trust to handle your case, you should consider the following:
<ul class="justify">
<li>You will ALWAYS get to talk to your attorney at Maze & Stone.</li>
<li>We will evaluate each and every case FOR FREE.</li>
<li>We will start working on your case immediately.</li>
<li>An attorney, rather than staff, will handle your case and all significant meetings.</li>
<li>We offer same day appointments and will set up a time that works best for your schedule, mornings or evenings.</li>
<li>While most cases are settled before trial, it is crucial to aggressively prepare all cases as if they ARE going to trial.</li>
<li>Our office will keep everything you share with us completely CONFIDENTIAL.</li>
<li>There are many firms that take on hundreds if not thousands of clients.  We refuse to overload our firm with so many cases that we cannot remember our clients’ names.  With this approach we are able to personalize and tailor our strategies around your case and give it the time and attention it deserves.</li>
<li>We will treat every case, every client, with the same degree of respect and attention, just like we would with a family member or close friend.</li>
</ul>
</p>

	</div>
	<div class="col-sm-6">

	  <h2>Contact Us</h2>

	  <p class="justify">Use the form below to get started discussing your case for free.</p>

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
      </div>
    </div>
@endsection