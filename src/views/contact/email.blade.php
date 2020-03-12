@component('mail::message')
# Introduction

Name:{{ $name }}
<br>
Message:
{{ $message }}

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
