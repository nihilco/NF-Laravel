{{ $request->name  }} [{{ $request->email }}] writes,

{{ $request->message }}

You can contact them via phone at {{ $request->phone }} or by email at {{ $request->email }}.

Thanks,
{{ config('view.title') }}

