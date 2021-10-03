@component('mail::message')
<h1>Forget Password Email</h1>
<a href="{{ route('reset.password.get', $token) }}">Reset Password</a>

The body of your message.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
