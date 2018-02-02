@extends('layouts.admin')

@section('title', 'Create Client')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Create Client</h1>

                <p class="lead">Use the form to create a client.</p>

		<form method="POST" action="/clients">
		    {{ csrf_field() }}

		    <div class="row">
		        <div class="col-sm-6">

		            <div class="form-group">
      	                        <label for="name">Name</label>
                                <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}">
	                        @if($errors->first('name'))
	                        <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="name">Email</label>
                                <input type="text" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
	                        @if($errors->first('email'))
	                        <small id="emailHelp" class="invalid-feedback">{{ $errors->first('email') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="name">Phone</label>
                                <input type="text" class="form-control{{ $errors->first('phone') ? ' is-invalid' : '' }}" id="phone" name="phone" aria-describedby="phoneHelp" value="{{ old('phone') }}">
	                        @if($errors->first('phone'))
	                        <small id="phoneHelp" class="invalid-feedback">{{ $errors->first('phone') }}</small>
	                        @endif
	                    </div>

			</div>
			<div class="col-sm-6">

		            <div class="form-group">
      	                        <label for="name">Address1</label>
                                <input type="text" class="form-control{{ $errors->first('address1') ? ' is-invalid' : '' }}" id="address1" name="address1" aria-describedby="address1Help" value="{{ old('address1') }}">
	                        @if($errors->first('address1'))
	                        <small id="address1Help" class="invalid-feedback">{{ $errors->first('address1') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="name">Address2</label>
                                <input type="text" class="form-control{{ $errors->first('address2') ? ' is-invalid' : '' }}" id="address2" name="address2" aria-describedby="address2Help" value="{{ old('addres2') }}">
	                        @if($errors->first('address2'))
	                        <small id="address2Help" class="invalid-feedback">{{ $errors->first('address2') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="city">City</label>
                                <input type="text" class="form-control{{ $errors->first('city') ? ' is-invalid' : '' }}" id="city" name="city" aria-describedby="cityHelp" value="{{ old('city') }}">
	                        @if($errors->first('city'))
	                        <small id="cityHelp" class="invalid-feedback">{{ $errors->first('city') }}</small>
	                        @endif
	                    </div>

			    <div class="row">
			        <div class="col-sm-6">

			            <div class="form-group">
    			                <label for="province">Province</label>
        			        <select class="form-control{{ $errors->first('province') ? ' is-invalid' : '' }}" id="province" name="province">
				            <option></option>
				            @foreach($provinces as $province)
				            <option value="{{ $province->id }}">{{ $province->abbr }}</option>
				            @endforeach
				        </select>
				        @if($errors->first('province'))
	                                <small id="provinceHelp" class="invalid-feedback">{{ $errors->first('province') }}</small>
	                                @endif

			            </div>


				</div>
				<div class="col-sm-6">

				    <div class="form-group">
      	                                <label for="name">Postal Code</label>
                                        <input type="text" class="form-control{{ $errors->first('postal_code') ? ' is-invalid' : '' }}" id="postal_code" name="postal_code" aria-describedby="postalCodeHelp" value="{{ old('postal_code') }}">
	                                @if($errors->first('postal_code'))
	                                <small id="postalCodeHelp" class="invalid-feedback">{{ $errors->first('postal_code') }}</small>
	                                @endif
	                            </div>

				</div>
			    </div>

			</div>			
		    </div>

	            <div class="form-group">
	                <label for="description">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ old('description') }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Create Client</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection