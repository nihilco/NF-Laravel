@extends('layouts.main')

@section('opengraph')
<meta property="fb:app_id" content="187097078310518" />
<meta property="og:url" content="https://www.taraloka.org" />
<meta property="og:type" content="website" />
<meta property="og:title" content="The Faraloka Foundation" />
<meta property="og:description" content="The Taraloka Foundation is a registered 501(c)3 non-profit organization creating opportunities for Himalayan girls by providing education, healthcare, and a safe refuge." />
<meta property="og:image" content="{{ url('/img/Donor_Book/Donor_Book-1.jpg') }}" />
@endsection

@section('title', 'Home')

<?php
$today = \Carbon\Carbon::now();
$newYear = \Carbon\Carbon::createFromDate(2018,1,1);
?>

@section('content')
    <div class="jumbotron jumbotron-fluid page-top">
      <div class="container">
    <!--
        <h1 class="display-3">Schools Out For Summer</h1>
    	<h2>From The Sikkim Happiness Home</h2>

        <hr class="my-4">
        <p class="lead">Summer is the season of fun and sun.  Donate today to help make a difference for the growing Taraloka Family!  All donations are tax deductible and help support our 29 girls.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/donate" role="button">Give Now</a>
        </p>
    -->
      </div>
    </div>

    <div class="bookWrapper">
      <div class="container">
          <div class="row">
	    <div class="col-sm-6">

          <img src="/img/Donor_Book/Donor_Book-1.jpg" alt="Donor Book" class="img-fluid" />
    
	    </div>
    	    <div class="col-sm-6 text-center">

              <h2 id="cta-header">Click here to learn more about how we achieve our mission.</h2>

@include('default.donor-book')

	    </div>
	  </div>
      </div>
    </div>

    <div class="fundraiserWrapper">
      <div class="container">
          <div class="row">
    	    <div class="col text-center">

    <h2>Hey! Who turned off the lights?</h2>
    <p>Learn more about how The Taraloka Foundation plans to power through India's daily blackouts.</p>
<a href="/fundraisers/solar-panel-fundraiser">Explore our Solar Panel Fundraiser</a>

	    </div>
	  </div>
      </div>
    </div>    
    
@endsection