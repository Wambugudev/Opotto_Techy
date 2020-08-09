@component('mail::message')
# Introduction

<h2 class=" text-info ">From the contact form.</h2>

<strong>Name: </strong>{{$request['contactname']}}
<strong>Email: </strong>{{$request['contactemail']}}

<h5>The message sent</h5>
{{$request['contactmessage']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
