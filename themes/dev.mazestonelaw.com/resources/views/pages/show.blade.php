@extends('layouts.main')

@section('title', $page->title)

@section('content')

    <div class="container page-top">

        <div class="row pt-3">
            <div class="col-sm-8">

                <h1>{{ $page->title }}</h1>

		<p class="lead">{{ $page->description }}</p>

		{!! $page->content !!}

            </div>
        </div>

    </div>

@endsection