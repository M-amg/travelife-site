<?php

namespace App\Http\Controllers;

use App\models\page\TlBlog;
use App\models\page\TlSlider;

class BlogController extends Controller
{
    public function index()
    {
        $articles = TlBlog::all();
        $slides = TlSlider::all()->where('property', 'blog')->where('status', 1)->take(3);

        return view('front.blog.index', compact('articles', 'slides'));
    }
    public function article($id)
    {
        $article = TlBlog::findOrFail($id);

        // $slides = TlSlider::all()->where('property', 'vol')->where('status', 1);

        return view('front.blog.article')
            ->with('article', $article);
    }

}
