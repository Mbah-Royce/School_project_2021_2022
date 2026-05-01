@component('mail::message')
Login Credentials

Your Login Password is {{$password}}
Your Email is this email to which this email was sent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
