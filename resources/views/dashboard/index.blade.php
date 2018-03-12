<?php
  $colors = ['007bff', '6c757d', 'ffc107', '28a745'];
?>

@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-12">

      <h1>Dashboard</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Dashboard',
          ],
      ]])

    </div>
  </div>

  <div class="row">
    <div class="col-sm-9">

      <div class="card panel">
  
        <div class="row">
          <div class="col-sm-2 text-center bg-primary card-header">
	        <span class="month">March</span><br />
	        <span class="day">3</span>
          </div>
          <div class="col-sm-2 card-body">
	        <span class="weekday">Saturday</span><br />
	        <span class="time">1:38<small>pm</small></span>
          </div>
          <div class="col-sm-2 card-body">
	        <span class="weekday">Saturday</span><br />
	        <span class="time">1:38<small>pm</small></span>
          </div>
          <div class="col-sm-2 card-body">
	        <span class="weekday">Saturday</span><br />
	        <span class="time">1:38<small>pm</small></span>
          </div>
          <div class="col-sm-2 card-body">
	        <span class="weekday">Saturday</span><br />
	        <span class="time">1:38<small>pm</small></span>
          </div>
          <div class="col-sm-2 card-body">
	        <span class="weekday">Saturday</span><br />
	        <span class="time">1:38<small>pm</small></span>
          </div>
        </div>

      </div><!-- /.card -->

    </div>
    <div class="col-sm-3">

      <div class="card panel">
  
        <div class="row">
          <div class="col-sm-5 text-center bg-primary card-header">
            <span class="month">{{ date('F') }}</span><br />
            <span class="day">{{ date('d') }}</span>
          </div>
          <div class="col-sm-7 card-body">
            <span class="weekday">{{ date('l') }}</span><br />
            <span class="time">{{ date('h:i') }}<small>{{ date('a') }}</small></span>
          </div>
        </div>

      </div><!-- /.card -->

    </div>
  </div>

</div>

@endsection