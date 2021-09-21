@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => "https://vitapro.com.pe/"])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
