@extends('layouts.admin')

@section('title', 'Create Account')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Create Account</h1>

                <p class="lead">Use the form to create an account.</p>

		<form method="POST" action="/accounts">
		    {{ csrf_field() }}

			    <div class="form-group">
    			        <label for="country">Type</label>
        			<select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
				    <option></option>
				    <option value="standard"{!! (old('type') == 'standard') ? ' selected="selected"' : '' !!}>Standard</option>
				    <option value="custom"{!! (old('type') == 'custom') ? ' selected="selected"' : '' !!}>Custom</option>				    
				</select>
				@if($errors->first('type'))
	                            <small id="typeHelp" class="invalid-feedback">{{ $errors->first('type') }}</small>
	                        @endif

			    </div>

			    <div class="form-group">
    			        <label for="country">Customer</label>
        			<select class="form-control{{ $errors->first('customer') ? ' is-invalid' : '' }}" id="customer" name="customer">
				    <option></option>
				    @foreach($customers as $customer)
				    <option value="{{ $customer->id }}"{!! (old('customer') == $customer->id) ? ' selected="selected"' : '' !!}>{{ $customer->name }}</option>
				    @endforeach
				</select>
				@if($errors->first('customer'))
	                            <small id="customerHelp" class="invalid-feedback">{{ $errors->first('customer') }}</small>
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
	  <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="5">{{ old('description') }}</textarea>
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

		    <div class="form-group">
      	                <label for="name">Secret Key</label>
                        <input type="text" class="form-control{{ $errors->first('secret') ? ' is-invalid' : '' }}" id="secret" name="secret" aria-describedby="secretHelp" value="{{ old('secret') }}">
	                @if($errors->first('secret'))
	                <small id="secretHelp" class="invalid-feedback">{{ $errors->first('secret') }}</small>
	                @endif
	            </div>

		    <div class="form-group">
      	                <label for="name">Publishable Key</label>
                        <input type="text" class="form-control{{ $errors->first('publishable') ? ' is-invalid' : '' }}" id="publishable" name="publishable" aria-describedby="publishableHelp" value="{{ old('publishable') }}">
	                @if($errors->first('publishable'))
	                <small id="publishableHelp" class="invalid-feedback">{{ $errors->first('publishable') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Create Account</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection