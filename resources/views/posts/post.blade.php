<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/sneakers" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Name</h2>
                <input type="text" name="sneaker[name]" placeholder="タイトル" value="{{ old('sneaker.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('sneaker.name') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="sneaker[body]" placeholder="今日も1日お疲れさまでした。">{{ old('sneaker.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('sneaker.body') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">
            <a href="/">back</a>
        </div>
    </body>
</html>