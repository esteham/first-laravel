<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        div.container{
            width: 600px;
            margin: 0 auto;
        }
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        li{
            float: left;
        }
        li a{
            display: black;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover{
            background-color: #111;
        }
        header,footer
        {
            padding: 1rem;
            color: white;
            background-color: #111;
            clear: left;
            text-align: center;
            width: 500px;
        }
        .sidebar{
            float: left;
            max-width: 160px;
            margin: 0;
            padding: 1em;
            background-color: #275e03ff;
            height: 300px;
        }
        .contents{
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>@include('master.header')</header>

        <div class="sidebar">
            @include('master.sidebar')
        </div>

        <div class="contents">
            @yield('content')
        </div>

        <footer>@include('master.footer')</footer>
    </div>
</body>
</html>