@extends('layouts.admin')

@section('title', 'Tasks')

@section('content')

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

      <h1>Tasks</h1>

      @include('layouts.breadcrumbs', ['breadcrumbs' => [
          [
              'label' => 'Tasks',
          ],
      ]])

    </div>

    <div class="col-sm-4 text-right">

      @can('create', \App\Models\Task::class)
      <a href="/tasks/create" class="btn btn-lg btn-primary mt-3"><i class="fas fa-plus"></i> Task</a>
      @endcan

    </div>

  </div>

  <div class="row">

    @forelse($tasks as $task)		  

    <div class="col-sm-3">
      <div class="card">
        <img class="card-img-top" src="https://placehold.it/450x300" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{!! \Illuminate\Support\Str::words($task->content, 25,'....')  !!}</p>
        </div>
      </div>
    </div>

    @empty
    <div class="col-sm-12">
      <p>No tasks at this time.</p>
    </div>
    @endforelse
    
  </div>

</div>

@endsection