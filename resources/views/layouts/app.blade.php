<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - @yield('title', 'index')</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body class="d-flex flex-column min-vh-100">
    @include('layouts.partials.navbar')

    <main class="flex-grow-1">
        @include('layouts.partials.head')
        @yield('content')
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    @include('layouts.partials.footer')
</body>
</html>
