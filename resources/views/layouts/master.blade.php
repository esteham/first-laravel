<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'My laravel app')</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @yield('head')
    </head>
<body>

<!-- Header -->
<nav class="navbar navbar-dark bg-dark">
    <a href="#" class="navbar-brand">POS System</a>
    <ul class="nav">
        <li class="nav-item">
        <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
        <a href="/about" class="nav-link">About</a>
        </li>
        <li class="nav-item">
        <a href="/contact" class="nav-link">Contact Us</a>
        </li>
    </ul>
</nav>
<nav class="bg-blue-600 text-white px-6 py-4 flex justify-between items-center">
        <div class="text-lg font-bold">
            <a href="{{ route('customer.index') }}">CustomerApp</a>
        </div>
        <div class="space-x-4">
            <a href="{{ route('customer.index') }}" class="hover:underline">Home</a>
            <a href="{{ route('customer.create') }}" class="hover:underline">Add Customer</a>
        </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-light text-dark text-center p-3 mt-4">
    <p>&copy; {{ date('Y') }} Super Store</p>
</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.bundle.min.js" integrity="sha512-Tc0i+vRogmX4NN7tuLbQfBxa8JkfUSAxSFVzmU31nVdHyiHElPPy2cWfFacmCJKw0VqovrzKhdd2TSTMdAxp2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>