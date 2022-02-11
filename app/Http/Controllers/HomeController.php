<?php

namespace App\Http\Controllers;

use App\AdminHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homes = AdminHome::get();
        return view('pages.home', compact('homes'));
    }
}
