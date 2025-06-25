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
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                        <nav class="bg-gray-800 p-4 text-white flex justify-between">
    <div class="flex gap-4">
        <a href="{{ url('/') }}" class="hover:underline">🏠 Accueil</a>
        <a href="{{ route('projects.index') }}" class="hover:underline">📁 Projets</a>
        <a href="{{ route('admin.projects.index') }}" class="hover:underline">⚙️ Gérer</a>
    </div>

    @auth
        <div class="flex items-center gap-4">
            <span>Bienvenue, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-red-400 hover:underline">Se déconnecter</button>
            </form>
        </div>
    @endauth
</nav>

                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
               @yield('content')

            </main>
        </div>
        <x-footer />

    </body>
</html>
