@extends('layouts.admin')

@section('title', 'Create Province')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row mt-3">
                    <h1>Create Province</h1>
		</div>

                <p class="lead">Use the form to create a province.</p>

		<form method="POST" action="/provinces">
		    {{ csrf_field() }}

		    <div class="row">
		        <div class="col-sm-2">

		    <div class="form-group">
      	                <label for="name">Abbr</label>
                        <input type="text" class="form-control{{ $errors->first('abbr') ? ' is-invalid' : '' }}" id="abbr" name="abbr" aria-describedby="abbrHelp" value="{{ old('abbr') }}">
	                @if($errors->first('abbr'))
	                <small id="abbrHelp" class="invalid-feedback">{{ $errors->first('abbr') }}</small>
	                @endif
	            </div>

		        </div>
			<div class="col-sm-7">

		    <div class="form-group">
      	                <label for="name">Name</label>
                        <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}">
	                @if($errors->first('name'))
	                <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                @endif
	            </div>

		        </div>
			<div class="col-sm-3">

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

   	            <button type="submit" class="btn btn-primary">Create Province</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection