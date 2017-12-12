@component('activities.activity')
  @slot('heading')
    {{ $activity->resource->owner->name }}
    replied to thread <a href="{{ $activity->resource->resource->path() }}">{{ $activity->resource->resource->title }}</a>
    <small>{{ $activity->created_at->diffForHumans() }}</small>
  @endslot

  @slot('body')
    <p>{{ $activity->resource->content }}</p>
  @endslot
@endcomponent