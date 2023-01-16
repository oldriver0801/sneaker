<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Sneaker $sneaker)
    {
        return view('posts/index')->with(['sneakers'=>$sneaker->getPaginateByLimit()]);
    }
    public function show(Sneaker $sneaker)
    {
        return view('posts/show')->with(['sneaker'=>$sneaker]);
    }
    public function post()
    {
        return view('posts/post');
    }
    public function store(Sneaker $sneaker,PostRequest $request)
    {
        $input = $request['post'];
        $sneaker->fill($input)->save();
        return redirect('/sneakers/' . $sneaker->id);
    }
    public function edit(Sneaker $sneaker)
    {
        return view('posts/edit')->with(['sneaker'=>$sneaker]);
    }
    public function update(PostRequest $request,Sneaker $sneaker)
    {
        $input_sneaker = $request['post'];
        $sneaker->fill($input_sneaker)->save();
        
        return redirect('/sneakers/' . $sneaker->id);
    }
    public function delete(Sneaker $sneaker)
    {
        $sneaker->delete();
        return redirect('/');
    }
}

?>