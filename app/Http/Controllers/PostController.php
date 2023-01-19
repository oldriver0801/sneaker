<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use App\Http\Requests\PostRequest;
use Cloudinary;

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
        $image_url=Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $input = $request['sneaker'];
        $input += ['user_id' => $request->user()->id];
        $input += ['image_url' => $image_url];
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
        $input_sneaker += ['user_id' => $request->user()->id];
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