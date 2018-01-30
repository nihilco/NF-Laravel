@extends('layouts.admin')

@section('title', 'Create Domain')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Create Domain</h1>

                <p class="lead">Use the form to create a domain.</p>

		<form method="POST" action="/domains">
		    {{ csrf_field() }}

		    <div class="form-group">
      	                <label for="name">TLD</label>
                        <input type="text" class="form-control{{ $errors->first('tld') ? ' is-invalid' : '' }}" id="tld" name="tld" aria-describedby="tldHelp" value="{{ old('tld') }}">
	                @if($errors->first('tld'))
	                <small id="tldHelp" class="invalid-feedback">{{ $errors->first('tld') }}</small>
	                @endif
	            </div>

    		    <div class="form-group">
		        <label for="registered">Registered On</label>
		        <div class="input-group{{ $errors->first('registered') ? ' is-invalid' : '' }}">
		            <span class="input-group-addon" id="addon-calendar"><i class="fa fa-calendar"></i></span>
		            <input type="date" id="registered" name="registered" class="form-control" aria-describedby="addon-calendar" placeholder="Registered" value="{{ old('registered') }}" autocomplete="off">
		        </div>
		        @if($errors->first('registered'))
 	                <small id="registeredHelp" class="invalid-feedback">{{ $errors->first('registered') }}</small>
	                @endif
		    </div>

    		    <div class="form-group">
		        <label for="expires">Expries On</label>
		        <div class="input-group{{ $errors->first('expires') ? ' is-invalid' : '' }}">
		            <span class="input-group-addon" id="addon-calendar"><i class="fa fa-calendar"></i></span>
		            <input type="date" id="expires" name="expires" class="form-control" aria-describedby="addon-calendar" placeholder="Expires" value="{{ old('expires') }}" autocomplete="off">
		        </div>
		        @if($errors->first('expires'))
 	                <small id="expiresHelp" class="invalid-feedback">{{ $errors->first('expires') }}</small>
	                @endif
		    </div>

   	            <button type="submit" class="btn btn-primary">Create Domain</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection