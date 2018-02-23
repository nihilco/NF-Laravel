@extends('layouts.admin')

@section('title', 'Edit Case')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-12">

                <h1 class="pt-3">Edit Case</h1>

                <p class="lead">Use the form to edit a case.</p>

		<form method="POST" action="{{ $clientCase->path() }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}

		    <div class="row">
		      <div class="col-sm-6">

		        <div class="form-group">
    		          <label for="customer">Client</label>
			  <div class="input-group mb-3">
        		    <select class="form-control{{ $errors->first('client') ? ' is-invalid' : '' }}" id="client" name="client">
			      <option></option>
			      @foreach($clients as $client)
			      <option value="{{ $client->id }}"{{ ($client->id == $clientCase->client_id) ? ' selected="selected"' : '' }}>{{ $client->name }}</option>
			      @endforeach
			    </select>

		            <div class="input-group-append">
                              <a href="/clients/create" class="btn btn-primary" type="button"><i class="fas fa-plus"></i></a>
			    </div>
			  </div>
			
			  @if($errors->first('client'))
	                  <small id="clientHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('client') }}</small>
	                  @endif
			</div>
		      </div>

		      <div class="col-sm-6">

                    <div class="form-group">
      	                <label for="name">Date of Incident</label>
                        <input type="text" class="form-control{{ $errors->first('doi') ? ' is-invalid' : '' }}" id="doi" name="doi" aria-describedby="doiHelp" value="{{ $clientCase->date_of_incident }}">
	                @if($errors->first('doi'))
	                <small id="doiHelp" class="invalid-feedback">{{ $errors->first('doi') }}</small>
	                @endif
	            </div>

		      </div>
		    </div>

		    <div class="row">
		      <div class="col-sm-6">

                    <div class="form-group">
      	                <label for="name">Name</label>
                        <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ $clientCase->name }}">
	                @if($errors->first('name'))
	                <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                @endif
	            </div>

		      </div>
		      <div class="col-sm-6">

                        <div class="form-group">
    		          <label for="type">Type</label>
                          <div class="input-group mb-3">
        		    <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
			      <option></option>
			      @foreach($caseTypes as $type)
			      <option value="{{ $type->id }}"{{ ($type->id == $clientCase->case_type_id) ? ' selected="selected"' : '' }}>{{ $type->name }}</option>
			      @endforeach
			    </select>

		            <div class="input-group-append">
                              <a href="/case-types/create" class="btn btn-primary" type="button"><i class="fas fa-plus"></i></a>
			    </div>
			  </div>
			  @if($errors->first('type'))
	                    <small id="typeHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('type') }}</small>
	                  @endif
			</div>

                      </div>
                    </div>
		    
	            <div class="form-group">
	                <label for="description">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ $clientCase->description }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Edit Case</button>
		    
		</form>

	    </div>
	</div>
    </div>

@endsection