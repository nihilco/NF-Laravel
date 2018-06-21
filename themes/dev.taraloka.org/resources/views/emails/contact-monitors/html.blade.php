@component('mail::message')

#<a href="mailto:{{ $request->email }}" target="_blank">{{ $request->name  }}</a> writes,

{{ $request->message }}

You can contact them via phone at <a href="tel:{{ $request->phone }}" target="_blank">{{ $request->phone }}</a> or by email at <a href="mailto:{{ $request->email }}" target="_blank">{{ $request->email }}</a>.

Thanks,<br />
{{ config('view.title') }}

@endcomponent
