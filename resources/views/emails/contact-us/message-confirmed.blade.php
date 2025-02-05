@component('mail::message')
# Thank You for Contacting Us, {{ $message->name }}!

We've received your message and our team will get back to you within 24-48 hours.

**Message Details:**<br>
**Subject:** {{ $message->subject }}<br>
**Your Message:**<br>
{{ $message->message }}

@component('mail::button', ['url' => url('/')])
Visit Our Website
@endcomponent

If you have any urgent inquiries, please don't hesitate to contact us directly at:<br>
**Email:** {{ config('app.email') }}

Best Regards,<br>
{{ config('app.name') }} Team

@component('mail::subcopy')
This is an automated message - please do not reply directly to this email.
@endcomponent
@endcomponent
