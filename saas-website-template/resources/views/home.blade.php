<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - SaaS Website Template</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('components.navbar')

    <div class="container">
        <h1>Welcome to Our SaaS Application</h1>
        <p>Your one-stop solution for all your software needs.</p>
        <a href="#" class="btn btn-primary">Get Started</a>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} SaaS Website Template. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>