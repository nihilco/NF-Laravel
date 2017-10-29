@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container padded">
      <div class="row">
	<div class="col-sm-6">

	  <h1>Welcome</h1>

	  <p>Chandler Maze and Clayton Stone attended law school together, where they discovered a
	  mutual calling to stand up for the rights of the people. Chandler and Clayton are both local
	  attorneys who respect and cherish the communities they serve. If your rights have been
	  infringed upon, whether by the government, an insurance company, or a big corporation, no
	  law firm will work harder to obtain a fair and favorable outcome in your case.</p>

	</div>
	<div class="col-sm-6">

	  <h2>Contact Us</h2>

	  <p>Use the form below to get started discussing your case.</p>

	  <form>
	    <div class="form-group">
	      <label for="exampleFormControlInput1">Name</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John Smith">
	    </div>
	    <div class="form-group">
	      <label for="exampleFormControlInput1">Email</label>
	      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jsmith@mazestonelaw.com">
	    </div>
	    <div class="form-group">
	      <label for="exampleFormControlInput1">Phone</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(859) 882-9999">
	    </div>
	    <div class="form-group">
	      <label for="exampleFormControlTextarea1">Message</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
	    </div>
	    <button type="submit" class="btn btn-primary">Contact Us</button>
	  </form>

	</div>
      </div>
    </div>
@endsection