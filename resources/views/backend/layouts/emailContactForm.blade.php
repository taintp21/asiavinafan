@component('mail::message')
# Your info

<p><b>Name</b> <span style="margin-left: 1.5rem;">{{$details['nameContact']}}</span></p>
<p><b>Email</b> <span style="margin-left: 1.5rem;">{{$details['emailContact']}}</span></p>
<p><b>Content</b></p>
<p>{{$details['contentContact']}}</p>

# Our answer
<p>{!! $details['reply'] !!}</p>
@component('mail::button', ['url' => url('/')])
Visit my site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
