<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
</head>

<body>

    <div class="flex bg-gray-100">

        @include('include.layouts.sidebar')

        <div class="flex-1 flex flex-col">

            @include('include.layouts.header')

            <main class="flex-1 p-6 pb-0">
                @yield('content')
            </main>

        </div>
    </div>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>