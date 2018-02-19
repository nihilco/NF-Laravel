@extends('layouts.admin')

@section('title', 'Create Case')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Create Case</h1>

                <p class="lead">Use the form to create a case.</p>

		<form method="POST" action="/cases">
		    {{ csrf_field() }}

		    <div class="form-group">
    		        <label for="customer">Client</label>
        		<select class="form-control{{ $errors->first('client') ? ' is-invalid' : '' }}" id="client" name="client">
			    <option></option>
			    @foreach($clients as $client)
			    <option value="{{ $client->id }}">{{ $client->name }}</option>
			    @endforeach
			</select>
			@if($errors->first('client'))
	                <small id="clientHelp" class="invalid-feedback">{{ $errors->first('client') }}</small>
	                @endif

		    </div>

                    <div class="form-group">
      	                <label for="name">Name</label>
                        <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}">
	                @if($errors->first('name'))
	                <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Create Case</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection