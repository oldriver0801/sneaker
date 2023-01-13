<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;

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
}

?>