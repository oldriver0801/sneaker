<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $sneaker->name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $sneaker->body }}</p>
                <p>{{ $sneaker->price }}</p>
            </div>
        </div>
        <div class="image w-90 h-90">
            <img src="{{ $sneaker->image_url }}" alt="画像が読み込めません"/>
        </div>
            <small>{{ $sneaker->user->name }}</small>
        <div class=settlement>
            <a href="/sneakers/{{ $sneaker->id }}/settlement">購入する</a>
        </div>
        <div class ="edit">
            <a href="/sneakers/{{ $sneaker->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/sneaker">戻る</a>
        </div>
    </body>
</html>
