@extends('layouts.admin')

@section('title', 'Create Book')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

                <h1 class="pt-3">Create Book</h1>

                <p class="lead">Use the form to create a book.</p>

		<form method="POST" action="/books">
		    {{ csrf_field() }}

		    <div class="form-group">
      	                <label for="name">Display Title</label>
                        <input type="text" class="form-control{{ $errors->first('display') ? ' is-invalid' : '' }}" id="display" name="display" aria-describedby="displayHelp" value="{{ old('display') }}">
	                @if($errors->first('display'))
	                <small id="displayHelp" class="invalid-feedback">{{ $errors->first('display') }}</small>
	                @endif
	            </div>

		    <div class="form-group">
      	                <label for="name">Alphabetic Title</label>
                        <input type="text" class="form-control{{ $errors->first('alphabetic') ? ' is-invalid' : '' }}" id="alphabetic" name="alphabetic" aria-describedby="alphabeticHelp" value="{{ old('alphabetic') }}">
	                @if($errors->first('alphabetic'))
	                <small id="alphabeticHelp" class="invalid-feedback">{{ $errors->first('alphabetic') }}</small>
	                @endif
	            </div>

		    <div class="form-group">
      	                <label for="name">Subtitle</label>
                        <input type="text" class="form-control{{ $errors->first('subtitle') ? ' is-invalid' : '' }}" id="subtitle" name="subtitle" aria-describedby="subtitleHelp" value="{{ old('subtitle') }}">
	                @if($errors->first('subtitle'))
	                <small id="subtitleHelp" class="invalid-feedback">{{ $errors->first('subtitle') }}</small>
	                @endif
	            </div>

		    <div class="form-group">
      	                <label for="name">Slug</label>
                        <input type="text" class="form-control{{ $errors->first('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" aria-describedby="slugHelp" value="{{ old('slug') }}">
	                @if($errors->first('slug'))
	                <small id="slugHelp" class="invalid-feedback">{{ $errors->first('slug') }}</small>
	                @endif
	            </div>

		    <div class="form-group">
    		        <label for="country">Authors</label>
        		<select class="form-control{{ $errors->first('authors') ? ' is-invalid' : '' }}" id="authors" name="authors[]" multiple="multiple">
			    <option></option>
			    @foreach($authors as $author)
			    <option value="{{ $author->id }}"<?php if(is_array(old('authors'))) { if(in_array($author->id, old('authors'))) { echo ' selected="selected"'; }  } ?>>{{ $author->last_name . ', ' . $author->first_name }}</option>
			    @endforeach
			</select>
			@if($errors->first('authors'))
	                     <small id="seriesHelp" class="invalid-feedback">{{ $errors->first('authors') }}</small>
	                @endif

		    </div>

		    <div class="row">
		        <div class="col-sm-9">

			    <div class="form-group">
    			        <label for="country">Series</label>
        			<select class="form-control{{ $errors->first('series') ? ' is-invalid' : '' }}" id="series" name="series">
				    <option></option>
				    @foreach($series as $s)
				    <option value="{{ $s->id }}">{{ $s->name }}</option>
				    @endforeach
				</select>
				@if($errors->first('series'))
	                            <small id="seriesHelp" class="invalid-feedback">{{ $errors->first('series') }}</small>
	                        @endif

			    </div>

			</div>
			<div class="col-sm-3">

		    <div class="form-group">
      	                <label for="name">Order</label>
                        <input type="text" class="form-control{{ $errors->first('order') ? ' is-invalid' : '' }}" id="order" name="order" aria-describedby="orderHelp" value="{{ old('order') }}">
	                @if($errors->first('order'))
	                <small id="orderHelp" class="invalid-feedback">{{ $errors->first('order') }}</small>
	                @endif
	            </div>

			</div>
		    </div>

	            <div class="form-group">
	                <label for="content">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ old('description') }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Create Book</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">



	    </div>
	</div>
    </div>

@endsection