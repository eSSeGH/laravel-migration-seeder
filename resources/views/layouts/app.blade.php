<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/f845cc90f8.js" crossorigin="anonymous"></script>

</head>

<body>

    <header style="text-align: center">
        <h1>LARAVEL-MIGRATION-SEEDER</h1>
    </header>

    <main class="bg-light">
        @yield('main-content')
    </main>

</body>

</html>