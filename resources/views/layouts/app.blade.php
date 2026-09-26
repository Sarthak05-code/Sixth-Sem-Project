<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'SubShare')</title>
</head>

<body class="bg-white text-gray-900">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>

</html>
