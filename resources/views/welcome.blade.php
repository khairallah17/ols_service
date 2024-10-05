<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans antialiased container mx-auto">
        <main class="flex items-center gap-4">

            <div>
                <h1 class="font-bold text-lg">Navigation</h1>
                <ul class="flex items-center gap-2">
                    <li>
                        <a href="/vehicles">Vehicles</a>
                    </li>
                    <li>
                        <a href="/categories">Categories</a>
                    </li>
                    <li>
                        <a href="/models">Models</a>
                    </li>
                    <li>
                        <a href="/brands">Brand</a>
                    </li>
                </ul>
            </div>

            

        </main>
    </body>
</html>
