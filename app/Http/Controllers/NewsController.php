<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::get();
        return view('pages.news', compact('news'));
    }
}
