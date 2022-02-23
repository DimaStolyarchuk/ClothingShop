<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homes = Product::get();
        return view('pages.home', compact('homes'));
    }
}
