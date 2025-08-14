<!DOCTYPE html>
<html>
<head>
    <title>Laravel 12 CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" style="width: 220px; height: 100vh;">
        <h4>Menu</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('products.index') }}" class="nav-link text-white">Products</a>
            </li>
            <!-- Future menu items -->
        </ul>
    </div>

    <!-- Main content -->
    <div class="p-4" style="flex: 1;">
        @yield('content')
    </div>
</div>
</body>
</html>
