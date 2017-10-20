@extends('layouts.main')

@section('title', 'Home')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    <?= $app->config['view']['title'] ?>
                </div>
            </div>
@endsection