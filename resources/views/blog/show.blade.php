@extends('layouts.main')

@section('title', 'Posts')

@section('content')

    <div class="container page-top">
      <div class="pt-3">
        <h1>{{ $post->title }}</h1>
      </div>
      <p class="lead">{{ $post->description }}</p>
    </div>

@endsection