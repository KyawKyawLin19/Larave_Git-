@component('mail::message')
# Introduction

{{$receipe->name}}

The Receipe has been Stored

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
