@component('mail::message')
# Mentor Acceptance

Dear {{ $mentor->fname }},

Congratulations! Your application as a mentor has been accepted.

Thank you for your interest and participation.

<x-mail::button :url="'http://127.0.0.1:8000/mentor/login'">
View your dashboard
</x-mail::button>

Best regards,

MentorQuest
@endcomponent
