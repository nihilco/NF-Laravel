@extends('layouts.admin')

@section('title', 'Edit Author')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Edit Author</h1>

                <p class="lead">Use the form to edit an author.</p>

		<form method="POST" action="{{ $author->path() }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}

		    <div class="row">
		        <div class="col-sm-4">
		            <div class="form-group">
      	                        <label for="name">First</label>
                                <input type="text" class="form-control{{ $errors->first('first') ? ' is-invalid' : '' }}" id="first" name="first" aria-describedby="firstHelp" value="{{ $author->first_name }}">
	                        @if($errors->first('first'))
	                        <small id="firstHelp" class="invalid-feedback">{{ $errors->first('first') }}</small>
	                        @endif
	                    </div>
			</div>
		        <div class="col-sm-4">
		            <div class="form-group">
      	                        <label for="name">Middle</label>
                                <input type="text" class="form-control{{ $errors->first('middle') ? ' is-invalid' : '' }}" id="middle" name="middle" aria-describedby="middleHelp" value="{{ $author->middle_name }}">
	                        @if($errors->first('middle'))
	                        <small id="middleHelp" class="invalid-feedback">{{ $errors->first('middle') }}</small>
	                        @endif
	                    </div>
			</div>
		        <div class="col-sm-4">
		            <div class="form-group">
      	                        <label for="name">Last</label>
                                <input type="text" class="form-control{{ $errors->first('last') ? ' is-invalid' : '' }}" id="last" name="last" aria-describedby="lastHelp" value="{{ $author->last_name }}">
	                        @if($errors->first('last'))
	                        <small id="lastHelp" class="invalid-feedback">{{ $errors->first('last') }}</small>
	                        @endif
	                    </div>
			</div>			
		    </div>

		    <div class="form-group">
      	                <label for="name">Website</label>
                        <input type="text" class="form-control{{ $errors->first('website') ? ' is-invalid' : '' }}" id="website" name="website" aria-describedby="websiteHelp" value="{{ $author->website }}">
	                @if($errors->first('website'))
	                <small id="websiteHelp" class="invalid-feedback">{{ $errors->first('website') }}</small>
	                @endif
	            </div>

	            <div class="form-group">
	                <label for="content">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ $author->description }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Create Author</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection