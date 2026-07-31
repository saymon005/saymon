<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', "It's Saymon")</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
    
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('images/faviconn.ico') }}">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="{{ vasset('css/style.css') }}">
    <link rel="stylesheet" href="{{ vasset('css/responsive-style.css') }}">

    @stack('styles')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75">
    
    <!-- Navbar Section -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('partials.footer')

    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!-- Custom Js Link -->
    <script src="{{ vasset('js/main.js') }}"></script>
    
    @stack('scripts')
</body>

</html>