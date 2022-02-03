<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homes = Home::get();
        return view('pages.home', compact('homes'));
    }
}
