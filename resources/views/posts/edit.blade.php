<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/sneakers/{{ $sneaker->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>名前</h2>
                    <input type='text' name='sneaker[name]' value="{{ $sneaker->name }}">
                </div>
                <div class='content__body'>
                    <h2>メッセージ</h2>
                    <input type='text' name='sneaker[body]' value="{{ $sneaker->body }}">
                </div>
                <div class="content__price">
                    <h2>値段</h2>
                    <input type='text' name='sneaker[price]' value="{{ $sneaker->price }}">
                </div>
                <br>
                <input type="submit" value="update">
            </form>
        </div>
    </body>
    </html>