@component('mail::message')
<h2>#Inquiry sent to you. </h2>

<strong>Name: </strong>{{$request['name']}}
<strong>  Email: </strong>{{$request['email']}}
<strong>  Telephone number: </strong>{{$request['telephoneNumber']}}

<strong>The Description sent</strong>
{{$request['description']}}

<strong>Budget</strong>
{{$request['budget']}}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
