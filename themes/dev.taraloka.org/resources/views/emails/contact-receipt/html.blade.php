@component('mail::message')

# Dear {{ $request->name }},

The following message was forwarded to site administrators:

{{ $request->message }}

You submitted that they can contact you by phone at <a href="tel:{{ $request->phone }}" target="_blank">{{ $request->phone }}</a> or by email at <a href="mailto:{{ $request->email }}" target="_blank">{{ $request->email }}</a>.

Someone will get back to you shortly.

Thanks,<br />
{{ config('view.title') }}

@endcomponent
