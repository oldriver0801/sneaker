<x-app-layout>
    <x-slot name="header">
        投稿する
    </x-slot>
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
                <h2>message</h2>
                <textarea name="sneaker[body]" cols="30" row="10" placeholder="・サイズ・状態・値段・その他">{{ old('sneaker.body') }}</textarea>
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
</x-app-layout>