@component('activities.activity')
  @slot('heading')
    {{ $activity->resource->owner->name }}
    created a channel <a href="{{ $activity->resource->path() }}">{{ $activity->resource->title }}</a>
    <small>{{ $activity->created_at->diffForHumans() }}</small>
  @endslot

  @slot('body')
    <p>{{ $activity->resource->description }}</p>
  @endslot
@endcomponent