<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'My Laravel App')</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" />

        <!--Custome css-->
        <link rel="stylesheet" href="{{ asset('css/customers/create.css') }}">
    </head>
<body>

    {{-- Header Include --}}
    @include('partials.header')

    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Footer Include --}}
    @include('partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.bundle.min.js"></script>
</body>
</html>