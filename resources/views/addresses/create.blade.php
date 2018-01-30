@extends('layouts.admin')

@section('title', 'Create Address')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Create Address</h1>

                <p class="lead">Use the form to create an address.</p>

		<form method="POST" action="/addresses">
		    {{ csrf_field() }}
		    <div class="form-group">
      	                <label for="name">Address 1</label>
                        <input type="text" class="form-control{{ $errors->first('address1') ? ' is-invalid' : '' }}" id="address1" name="address1" aria-describedby="address1Help" value="{{ old('address1') }}">
	                @if($errors->first('address1'))
	                <small id="address1Help" class="invalid-feedback">{{ $errors->first('address1') }}</small>
	                @endif
	            </div>
		    <div class="form-group">
      	                <label for="name">Address 2</label>
                        <input type="text" class="form-control{{ $errors->first('address2') ? ' is-invalid' : '' }}" id="address2" name="address2" aria-describedby="address2Help" value="{{ old('address2') }}">
	                @if($errors->first('address2'))
	                <small id="address2Help" class="invalid-feedback">{{ $errors->first('address2') }}</small>
	                @endif
	            </div>
		    <div class="form-group">
      	                <label for="name">Address 3</label>
                        <input type="text" class="form-control{{ $errors->first('address3') ? ' is-invalid' : '' }}" id="address3" name="address3" aria-describedby="address3Help" value="{{ old('address3') }}">
	                @if($errors->first('address3'))
	                <small id="address3Help" class="invalid-feedback">{{ $errors->first('address3') }}</small>
	                @endif
	            </div>

		    <div class="row">
     		        <div class="col-sm-5">
		            <div class="form-group">
      	                        <label for="name">City</label>
                                <input type="text" class="form-control{{ $errors->first('city') ? ' is-invalid' : '' }}" id="city" name="city" aria-describedby="cityHelp" value="{{ old('city') }}">
	                        @if($errors->first('city'))
	                        <small id="cityHelp" class="invalid-feedback">{{ $errors->first('city') }}</small>
	                        @endif
	                    </div>			
			</div>
			<div class="col-sm-2">
			    <div class="form-group">
    			        <label for="country">Province</label>
        			<select class="form-control{{ $errors->first('province') ? ' is-invalid' : '' }}" id="province" name="province">
				    <option></option>
				    @foreach($provinces as $province)
				    <option value="{{ $province->id }}">{{ $province->name }}</option>
				    @endforeach
				</select>
				@if($errors->first('province'))
	                            <small id="provinceHelp" class="invalid-feedback">{{ $errors->first('province') }}</small>
	                        @endif

			    </div>
			</div>
			<div class="col-sm-3">
		            <div class="form-group">
      	                        <label for="name">Postal Code</label>
                                <input type="text" class="form-control{{ $errors->first('postal_code') ? ' is-invalid' : '' }}" id="postal_code" name="postal_code" aria-describedby="postalcodeHelp" value="{{ old('postal_code') }}">
	                        @if($errors->first('postal_code'))
	                        <small id="postalcodeHelp" class="invalid-feedback">{{ $errors->first('postal_code') }}</small>
	                        @endif
	                    </div>						
			</div>
			<div class="col-sm-2">
			    <div class="form-group">
    			        <label for="country">Country</label>
        			<select class="form-control{{ $errors->first('country') ? ' is-invalid' : '' }}" id="country" name="country">
				    <option></option>
				    @foreach($countries as $country)
				    <option value="{{ $country->id }}">{{ $country->name }}</option>
				    @endforeach
				</select>
				@if($errors->first('country'))
	                            <small id="countryHelp" class="invalid-feedback">{{ $errors->first('country') }}</small>
	                        @endif

			    </div>			
			</div>
		    </div>

   	            <button type="submit" class="btn btn-primary">Create Address</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection