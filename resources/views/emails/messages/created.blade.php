@component('mail::message')
Hey Admin

- {{ $msg->name }}
-  {{ $msg->email }}

@component('mail::panel')
{{ $msg->msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
