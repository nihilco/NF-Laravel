@extends('layouts.main')

@section('title', 'Create Page')

@section('content')

    <div class="container page-top">
      <div class="pt-3">
        <h1>Create Page</h1>
      </div>
      <p class="lead">Create a new page.</p>

      <form method="POST" action="/pages">
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
	  <label for="content">Description</label>
	  <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ old('description') }}</textarea>
	  @if($errors->first('description'))
	  <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	  @endif
	</div>
	<div class="form-group">
	  <label for="content">Content</label>
	  <textarea class="form-control{{ $errors->first('content') ? ' is-invalid' : '' }}" id="content" name="content" aria-describedby="contentHelp" rows="5">{{ old('content') }}</textarea>
	  @if($errors->first('content'))
	  <small id="contentHelp" class="invalid-feedback">{{ $errors->first('content') }}</small>
	  @endif
	</div>

   	<button type="submit" class="btn btn-primary">Create Page</button>
	
      </form>

    </div>

@endsection