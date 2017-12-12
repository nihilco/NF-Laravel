@component('activities.activity')
  @slot('heading')
    {{ $activity->resource->owner->name }}
    created a thread <a href="{{ $activity->resource->path() }}">{{ $activity->resource->title }}</a>
    <small>{{ $activity->created_at->diffForHumans() }}</small>
  @endslot

  @slot('body')
    <p>{{ $activity->resource->content }}</p>
  @endslot
@endcomponent