@extends('layouts.main')

@section('title', 'Home')

<?php
$today = \Carbon\Carbon::now();
$newYear = \Carbon\Carbon::createFromDate(2018,1,1);
?>

@section('content')
    <div class="jumbotron jumbotron-fluid page-top">
      <div class="container">
        <h1 class="display-3">Be My Valentine</h1>
	<h2>From The Sikkim Happiness Home</h2>

        <hr class="my-4">
        <p class="lead">February is the season of sharing and love.  Donate today to help make a difference for the growing Taraloka Family!  All donations are tax deductible and help support our 35 girls.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/donate" role="button">Give Now</a>
        </p>
      </div>
    </div>

    <div class="bookWrapper">
      <div class="container">
          <div class="row">
	    <div class="col-sm-6">
	      <img src="http://via.placeholder.com/800x600" class="img-fluid"/>
	    </div>
    	    <div class="col-sm-6">

              <h2 class="display-4 font-weight-normal">Punny headline</h2>
              <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
	      <a class="btn btn-primary" href="#">View eBook</a>

	    </div>
	  </div>
      </div>
    </div>
@endsection