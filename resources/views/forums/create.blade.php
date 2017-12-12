@extends('layouts.main')

@section('title', 'Create Forum')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-8 col-md-9">

	        <div class="mt-3">
                    <h1>Create Forum</h1>
		</div>

                <p class="lead">Use the form to create a forum.</p>

		<form method="POST" action="/forums">
		    {{ csrf_field() }}
		    <div class="form-group">
      	                <label for="channel_id">Channel</label>
                        <select class="form-control{{ $errors->first('channel_id') ? ' is-invalid' : '' }}" id="channelId" name="channel_id">
			    <option value="">Select a channel...</option>
			    @foreach($channels as $channel)
			    <option value="{{ $channel->id }}">{{ $channel->title }}</option>
			    @endforeach
			</select>
	                @if($errors->first('channel_id'))
	                <small id="channelIdHelp" class="invalid-feedback">{{ $errors->first('channel_id') }}</small>
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
	                <label for="content">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ old('description') }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
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