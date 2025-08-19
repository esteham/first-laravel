<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test View</title>
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background: #f8f9fa;
        }
        .hero {
            min-height: 80vh;
            align-items: center;
            justify-content: center;
            text-align: center;
            list-style: none;
        }
    </style>
</head>
<body>

    <div class="hero">
        <h1>Test View</h1>
        {{-- <!-- <ul>
            @foreach($articleName as $article)
                <li>{{ $article }}</li>
            @endforeach
        </ul> --> --}}
        <ul>
            <li>{{ $withView }}</li>
        </ul>
    </div>
    
</body>
</html>