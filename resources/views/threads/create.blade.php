@extends('layouts.main')

@section('title', 'Create Thread')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Create Thread</h1>
		</div>

                <p class="lead">Use the form to create a thread.</p>

		<form method="POST" action="/threads">
		    {{ csrf_field() }}
		    <div class="form-group">
      	                <label for="forum">Forum</label>
                        <select class="form-control{{ $errors->first('forum_id') ? ' is-invalid' : '' }}" id="forumId" name="forum_id">
			    <option value="">Select a forum...</option>
			    @foreach($forums as $forum)
			    <option value="{{ $forum->id }}">{{ $forum->title }}</option>
			    @endforeach
			</select>
	                @if($errors->first('forum_id'))
	                <small id="forumIdHelp" class="invalid-feedback">{{ $errors->first('forum_id') }}</small>
	                @endif
	            </div>
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

   	            <button type="submit" class="btn btn-primary">Create Forum</button>
		    
		</form>

	    </div>
	    <div class="col-sm-4 col-md-3">

	      @include('forums.sidebar')

	    </div>
	</div>
    </div>

@endsection