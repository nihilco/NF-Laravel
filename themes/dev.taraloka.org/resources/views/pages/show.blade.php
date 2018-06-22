@extends('layouts.main')

@section('opengraph')
<meta property="fb:app_id" content="187097078310518" />
<meta property="og:url" content="{{ url($page->path()) }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $page->title }} | The Taraloka Foundation" />
<meta property="og:description" content="{{ $page->description }}" />
<meta property="og:image" content="{{ url('/img/Donor_Book/Donor_Book-1.jpg') }}" />
@endsection

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