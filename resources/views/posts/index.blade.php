<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='sneakers'>
            @foreach ($sneakers as $sneaker)
                <div class='sneaker'>
                    <h2 class='title'>{{ $sneaker->title }}</h2>
                    <p class='body'>{{ $sneaker->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $sneakers->links() }}
        </div>
    </body>
</html>