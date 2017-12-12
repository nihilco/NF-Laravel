Dear {{ $request->name }},

The following message was forwarded to site administrators:

{{ $request->message }}

You submitted that they can contact you by phone at {{ $request->phone }} or by email at {{ $request->email }}.

Someone will get back to you shortly.

Thanks,
{{ config('view.title') }}

