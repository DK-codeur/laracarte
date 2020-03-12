@component('mail::message')
#  Hello admin

- {{$msg->name}}
- {{$msg->email}}

@component('mail::panel')
{{$msg->message}}
@endcomponent

@component('mail::button', ['url' => ''])
Go to profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
