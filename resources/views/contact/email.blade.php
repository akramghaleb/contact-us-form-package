<x-mail::message>
# Introduction

From: {{ $name }}<br />
Email: {{ $email }}<br />
Subject: {{ $subject }}<br />
Message:
{{ $message }}<br />


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
