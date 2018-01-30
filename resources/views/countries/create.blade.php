@extends('layouts.admin')

@section('title', 'Create Country')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Create Country</h1>

                <p class="lead">Use the form to create a country.</p>

		<form method="POST" action="/countries">
		    {{ csrf_field() }}

		    <div class="row">
		        <div class="col-sm-2">

		    <div class="form-group">
      	                <label for="name">Code</label>
                        <input type="text" class="form-control{{ $errors->first('code') ? ' is-invalid' : '' }}" id="code" name="code" aria-describedby="codeHelp" value="{{ old('code') }}">
	                @if($errors->first('code'))
	                <small id="codeHelp" class="invalid-feedback">{{ $errors->first('code') }}</small>
	                @endif
	            </div>

		        </div>
			<div class="col-sm-10">

		    <div class="form-group">
      	                <label for="name">Name</label>
                        <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}">
	                @if($errors->first('name'))
	                <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                @endif
	            </div>

		        </div>
		    </div>

   	            <button type="submit" class="btn btn-primary">Create Country</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection