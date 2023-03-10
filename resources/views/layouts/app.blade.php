<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Laravel comics')</title>  {{-- il 2 è il valore di default che viene fuori --}}

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')  {{-- faccio cosi xk voglio che header sia sempre lo stesso in ogni pagina, lo stesso vale x footer --}}
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

</body>

</html>
