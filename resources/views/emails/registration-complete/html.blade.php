@component('mail::message')

# Welcome {{ $user->name }},

You have successfully registered.  Your username is `{{ $user->username }}`, and you can go to <a href="{{ config('app.url') . '/login' }}" target="_blank">{{ config('app.url') }}/login</a> to login, or click the button below.

@component('mail::button', ['url' => '/login', 'color' => 'primary'])
Login Now
@endcomponent

Thanks,<br />
{{ config('view.title') }}

@endcomponent
