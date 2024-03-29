@extends('layouts.admin')

@section('title', 'Create Post')

@section('content')

<div class="container-fluid">

  <div class="row">
    
    <div class="col-sm-8">

      <h1>Create Post</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Posts',
              'url' => '/posts',
          ],
          [
              'label' => 'Create',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right"></div>
    
  </div>

  <div class="row">

    <div class="col-sm-8">

      <p class="lead">Create a new post.</p>

      <form method="POST" action="/posts">
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

   	<button type="submit" class="btn btn-primary">Create Post</button>
	
      </form>
    
    </div>

  </div>    

</div>

@endsection