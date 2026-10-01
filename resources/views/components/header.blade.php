<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel - {{ $title ?? 'Wellcome' }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    </head>
    <body>

<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full py-3 bg-navbar border-b border-navbar-line ">
 <x-nav-link :active="request()->is('/')" href="/">
        Home
    </x-nav-link>

    <x-nav-link :active="request()->is('About')" href="About">
        About
    </x-nav-link>

    <x-nav-link :active="request()->is('Contact')" href="Contact">
        Contact
    </x-nav-link>
</header>
    {{ $slot }}
    </body>
</html>
