@extends('layouts.main')

@section('title', 'Create Customer')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="row mt-3">
                    <h1>Create Customer</h1>
		</div>

                <p class="lead">Use the form to create a customer.</p>

		<form method="POST" action="/customers">
		    {{ csrf_field() }}
		    <div class="form-group">
      	                <label for="title">Title</label>
                        <input type="text" class="form-control{{ $errors->first('title') ? ' is-invalid' : '' }}" id="title" name="title" aria-describedby="titleHelp" value="{{ old('title') }}">
	                @if($errors->first('title'))
	                <small id="titleHelp" class="invalid-feedback">{{ $errors->first('title') }}</small>
	                @endif
	            </div>
                    <div class="form-group">
      	                <label for="slug">Slug</label>
                        <input type="text" class="form-control{{ $errors->first('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" aria-describedby="slugHelp" value="{{ old('slug') }}">
	                @if($errors->first('slug'))
	                <small id="slugHelp" class="invalid-feedback">{{ $errors->first('slug') }}</small>
	                @endif
	            </div>
	            <div class="form-group">
	                <label for="content">Content</label>
	                <textarea class="form-control{{$errors->first('content') ? ' is-invalid' : '' }}" id="description" name="content" aria-describedby="contentHelp" rows="3">{{ old('content') }}</textarea>
	                @if($errors->first('content'))
	                <small id="contentHelp" class="invalid-feedback">{{ $errors->first('content') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Create Customer</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection