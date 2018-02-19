@extends('layouts.admin')

@section('title', 'Create Customer')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row mt-3">
                    <h1>Create Customer</h1>
		</div>

                <p class="lead">Use the form to create a customer.</p>

		<form method="POST" action="/customers">
		    {{ csrf_field() }}

		    <div class="form-group">
    		        <label for="country">Type</label>
        	    	<select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
			    <option></option>
			    <option value="standard"{!! (old('type') == 'individual') ? ' selected="selected"' : '' !!}>Individual</option>
			    <option value="business"{!! (old('type') == 'business') ? ' selected="selected"' : '' !!}>Business</option>				    
			</select>
			@if($errors->first('type'))
	                    <small id="typeHelp" class="invalid-feedback">{{ $errors->first('type') }}</small>
	                @endif
		    </div>

		    <div class="form-group">
      	                <label for="name">Email</label>
                        <input type="email" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
	                @if($errors->first('email'))
	                <small id="emailHelp" class="invalid-feedback">{{ $errors->first('email') }}</small>
	                @endif
	            </div>

		    <div class="form-group">
      	                <label for="name">Name</label>
                        <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}">
	                @if($errors->first('name'))
	                <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                @endif
	            </div>
		    
	            <div class="form-group">
	                <label for="description">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ old('description') }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>

		    <div class="form-group">
      	                <label for="name">Stripe ID</label>
                        <input type="text" class="form-control{{ $errors->first('stripe') ? ' is-invalid' : '' }}" id="stripe" name="stripe" aria-describedby="stripeHelp" value="{{ old('stripe') }}">
	                @if($errors->first('stripe'))
	                <small id="stripeHelp" class="invalid-feedback">{{ $errors->first('stripe') }}</small>
	                @endif
	            </div>


   	            <button type="submit" class="btn btn-primary">Create Customer</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection