<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blog()
    {
        return view('dashboard.blog', [
            'blogs' => Blog::latest()->paginate(10)
        ]);
    }

    public function category()
    {
        return view('dashboard.category',[
            'categories' => Category::latest()->paginate(10)
        ]);
    }
}
