<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>{{ $title ?? 'STT CIPASUNG' }}</title>
    </head>

    <body>
        <x-header />
        {{-- All content  --}}
        {{ $slot }}
        <x-footer />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </body>

</html>
