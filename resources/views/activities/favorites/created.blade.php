@component('activities.activity')
  @slot('heading')
    {{ $activity->resource->owner->name }}
    favorited a <a href="{{ $activity->resource->resource->path() }}">reply</a>
    <small>{{ $activity->created_at->diffForHumans() }}</small>
  @endslot

  @slot('body')
    <p>{{ $activity->resource->resource->content }}</p>
  @endslot
@endcomponent