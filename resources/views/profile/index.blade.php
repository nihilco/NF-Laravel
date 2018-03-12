@extends('layouts.admin')

@section('title', 'Profile')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-12">

      <h1>Profile</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Profile',
          ],
      ]])

    </div>
  </div>

</div>

@endsection