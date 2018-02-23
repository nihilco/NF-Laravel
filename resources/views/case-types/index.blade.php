@extends('layouts.admin')

@section('title', 'Case Types')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-12">

	        <div class="row mt-3">
		  <div class="col-sm-8">
		    <h1>Case Types</h1>
		  </div>
		  <div class="col-sm-4 text-right">

		        <ul class="list-inline" style="margin-bottom:0;">
			  <li class="list-inline-item"><a href="/case-types/create" class="btn btn-primary">Create Case Type</a></li>
			</ul>

		  </div>
		</div>
		
		<table class="table table-bordered table-striped">
		  <thead>
  	            <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
     		      <th scope="col">Color</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>

		  <?php
		    $c = 1;
		  ?>

		  @foreach($caseTypes as $caseType)

                    <tr>
		      <th scope="row">{{ $c }}</th>
		      <td><a href="{{ $caseType->path() }}">{{ $caseType->name }}</a></td>
		      <td><span class="badge badge-{{ ($caseType->color != null) ? $caseType->color : 'secondary' }}">Example</span></td>
		      <td>
		        <ul class="list-inline" style="margin-bottom:0;">
			  @can('update', $caseType)
			  <li class="list-inline-item"><a href="{{ $caseType->path() . '/edit' }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a></li>
			  @endcan
			  @can('delete', $caseType)
			  <li class="list-inline-item"><form method="POST" action="{{ $caseType->path() }}">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></form></li>
			  @endcan
			</ul>
		      </td>
		    </tr>

		<?php
		  $c++;
		?>

		@endforeach

                </tbody>
	      </table>

	    </div>
	</div>
    </div>

@endsection