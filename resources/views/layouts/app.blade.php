<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex">
        <!--Sidebar -->
        <div class="bg-drak text-white p-3" style="width: 220px; height: 100vh;">
            <h4>CRUD Menu</h4>
            <ul class="nav flex-cloumn">
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link text-white"> Products </a>
                </li>
                <!-- others -->
            </ul>
        </div>

        <!--Main content-->
        <div class="p-4" style="flex: 1;">
            @yield('content')
        </div>
    </div>
</body>
</html>