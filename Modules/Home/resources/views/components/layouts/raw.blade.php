<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} {{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
    <head>
        <x-home::section.meta />
        <title>{{ config('app.name') }} - {{ $title ?? 'Login' }}</title>

        <x-home::section.css />
    </head>
    <body class="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
        <main>
            {{ $slot }}
        </main>

        <x-home::section.js />
        <x-home::toastr />
    </body>
</html>
