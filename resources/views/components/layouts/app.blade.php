<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
 <body class="font-sans antialiased">
    <div class="bg-gray-100 dark:bg-gray-900">
        <div class="col-span-12">
            <livewire:layout.navigation />
        </div>
        <div class="grid grid-cols-12 gap-4 ">
            <div class="col-span-2">
                <livewire:layout.side-bar />
            </div>
            <main class="pt-16 col-span-8 ">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
