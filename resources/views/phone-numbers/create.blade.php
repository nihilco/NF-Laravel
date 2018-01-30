@extends('layouts.admin')

@section('title', 'Create Phone Number')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row mt-3">
                    <h1>Create Phone Number</h1>
		</div>

                <p class="lead">Use the form to create a phone number.</p>

		<form method="POST" action="/phone-numbers">
		    {{ csrf_field() }}

		    <div class="form-group">
      	                <label for="name">Number</label>
                        <input type="text" class="form-control{{ $errors->first('number') ? ' is-invalid' : '' }}" id="number" name="number" aria-describedby="numberHelp" value="{{ old('number') }}">
	                @if($errors->first('number'))
	                <small id="numberHelp" class="invalid-feedback">{{ $errors->first('number') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Create Phone Number</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection