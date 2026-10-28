<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav style="background: #f4f4f4; padding: 10px; margin-bottom: 20px;">
        <a href="/">Home</a> |
        <a href="/about">About Us</a> |
        <a href="/services">Services</a> |
        <a href="/contact">Contact</a>
    </nav>

    <hr>

    <div class="container">
        @yield('content')
    </div>

    <hr>

    <footer>
        <p>&copy; 2026 Web Development 3 Class. All rights reserved.</p>
    </footer>

</body>
</html>
