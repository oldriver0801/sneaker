<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        投稿一覧
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿一覧</h1>
        <div class='sneakers'>
            @foreach ($sneakers as $sneaker)
                <div class='sneakers'>
                    <h2 class='name'>
                        <a href="/sneakers/{{ $sneaker->id }}">{{ $sneaker->name }}</a>
                    </h2>
                    <p class='body'>{{ $sneaker->body }}</p>
                    <div class="image">
                        <img src="{{ $sneaker->image_url }}">
                    </div>
                    <small>{{ $sneaker->user->name }}</small>
                        <form action="/sneakers/{{ $sneaker->id }}" id="form_{{ $sneaker->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deleteSneaker({{ $sneaker->id }})">delete</button> 
                        </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $sneakers->links() }}
        </div>
        <script>
            function deleteSneaker(id) {
            'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
</x-app-layout>