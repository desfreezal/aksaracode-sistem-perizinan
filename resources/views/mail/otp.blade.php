<x-mail::message>

# OTP Notification

Hello {{ $name }},

Here is your One-Time Password (OTP): **{{ $otp }}**

This OTP is valid for a short period. Do not share it with anyone.

Thank you for using our service.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
