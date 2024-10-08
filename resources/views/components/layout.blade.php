<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>These Four Walls</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
                    <header>
                        <h1>{{$heading}}</h1>
                    </header>
                    <x-nav></x-nav>
                    
                    <main class="mt-6">
                        <?= $slot ?>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                   
                    </footer>

    </body>
</html>