@component('mail::message')
# Introduction

<h2 class=" text-info ">From the contact form.</h2>

<strong>Name: </strong>{{$request['contactname']}}
<strong>Email: </strong>{{$request['contactemail']}}

<strong>The message sent</strong>

{{$request['message']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
