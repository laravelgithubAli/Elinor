<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminhomeController extends Controller
{
    public function index()
    {
        return view('admin.home',[
            'product' => Product::all(),
            'post' => Post::all(),
            'products'  =>Product::query()->take(3)->orderBy('id','desc')->get(),
            'posts' => Post::query()->take(3)->orderBy('id','desc')->get()
        ])->with(['activity111' => 'side-menu--active']);
    }
}
