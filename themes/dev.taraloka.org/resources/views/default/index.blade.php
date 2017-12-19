@extends('layouts.main')

@section('title', 'Home')

<?php
$today = \Carbon\Carbon::now();
$newYear = \Carbon\Carbon::createFromDate(2018,1,1);
?>

@section('content')
    <div class="jumbotron jumbotron-fluid page-top">
      <div class="container">
        <h1 class="display-3">Happy Holidays</h1>
	<h2>From The Sikkim Happiness Home</h2>

        <hr class="my-4">
        <p class="lead">Tis a time of giving and celebration.  Donate today to help make a difference this holiday season for the growing Taraloka Family!  All donations are tax deductible and there are only <strong>{{ \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::createFromDate(2018,1,1)) }} days</strong> until the new year.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/donate" role="button">Give Now</a>
        </p>
      </div>
    </div>
@endsection