@component('mail::message')
# Hi

You are invited to be a member of S3Geeks community. Click the button below to activate your membership.
<br/>
<b>Invitation Code: </br> {{ $code }}
@component('mail::button', ['url' => $url])
Accept invitation 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
