@extends('layouts.main')

@section('title', $page->title)

@section('content')

    <div class="container page-top">

        <div class="row">
            <div class="col-12">

	            <div class="mt-3">
                    <h1>{{ $page->title }}</h1>
		        </div>

                {!! $page->content !!}

            </div>
        </div>

    </div>

@endsection