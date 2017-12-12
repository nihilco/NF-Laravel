@component('mail::message')

# Hello {{ $user->name }},

Please verify your email address by going to <a href="{{ config('app.url') . '/verify-email-address' }}">{{ config('app.url') }}/verify-email-address</a>, or by clicking the button below.

@component('mail::button', ['url' => '/verify-email-address', 'color' => 'red'])
Verify Email
@endcomponent

Thanks,<br />
{{ config('app.name') }}

@endcomponent
