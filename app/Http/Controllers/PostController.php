<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;

class PostController extends Controller
{
    public function index(Sneaker $sneaker)
    {
        return $sneaker->get();
    }
}

?>