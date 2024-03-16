<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Padel David</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-[#f0f0f0]">
        <div class="w-full h-dvh flex flex-col justify-center items-center">
            <h1 class="text-5xl">Gracias por confiar en nostros</h1>
            <h1 class="text-5xl">Tu profesor es {{$profesor->name}}</h1>
            @if (Route::has('login'))
                <img src="{{asset("images/padelLogo.png")}}" alt="Logo" class="w-[250px]">
                <div class="flex justify-center">
                    @auth
                        <a href="{{ url('/suscripcion') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">suscripcion</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
