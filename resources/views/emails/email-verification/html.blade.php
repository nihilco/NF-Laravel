@component('mail::message')

# Hello {{ $user->name }},

Please verify your email address by going to <a href="{{ config('app.url') . '/verify-email' }}">{{ config('app.url') }}/verify-email</a>, or by clicking the button below.

@component('mail::button', ['url' => '/verify-email', 'color' => 'red'])
Verify Email
@endcomponent

Thanks,<br />
{{ config('app.name') }}

@endcomponent
