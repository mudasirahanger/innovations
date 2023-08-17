@component('mail::message')
# Hello , {{ $name }} {{ $lname}}
 
Your Account has been Create Successfully!
 
@component('mail::button', ['url' => $url])
click to login
@endcomponent
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent