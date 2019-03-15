@component('mail::message')
# Introduction

Hello {{ $user->name }}

Your email : {{ $user->email}} is registered.

@component('mail::button', ['url' => '/projects'])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
