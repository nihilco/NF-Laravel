@extends('layouts.main')

@section('title', 'Home')

<?php
$today = \Carbon\Carbon::now();
$newYear = \Carbon\Carbon::createFromDate(2018,1,1);
?>

@section('content')
    <div class="jumbotron jumbotron-fluid page-top">
      <div class="container">
        <h1 class="display-3">Schools Out For Summer</h1>
    	<h2>From The Sikkim Happiness Home</h2>

        <hr class="my-4">
        <p class="lead">Summer is the season of fun and sun.  Donate today to help make a difference for the growing Taraloka Family!  All donations are tax deductible and help support our 29 girls.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/donate" role="button">Give Now</a>
        </p>
      </div>
    </div>

    <div class="bookWrapper">
      <div class="container">
          <div class="row">
	    <div class="col-sm-6">

<div class="embed-responsive embed-responsive-4by3">
    <video id="my-video" class="video-js embed-responsive-item" controls preload="auto" width="400" height="300" poster="https://vjs.zencdn.net/v/oceans.png" data-setup="{}">
        <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
        <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
        <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a web browser that
          <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
      </video>
    </div>
    
	    </div>
    	    <div class="col-sm-6 text-center">

              <h2 style="margin-top:8rem;">Click here to learn more about how we achieve our mission.</h2>

@include('default.donor-book')

	    </div>
	  </div>
      </div>
    </div>
@endsection