<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Sneaker $sneaker, Request $request, Like $like)
    {
        //$like=New Like();
        $like->sneaker_id=$sneaker->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return redirect('/sneaker');
    }
    public function unlike(Sneaker $sneaker, Request $request)
    {
        $user=Auth::user()->id;
        $like=Like::where('sneaker_id', $sneaker->id)->where('user_id', $user)->first();
        $like->delete();
        return redirect('/sneaker');
    }
}
?>