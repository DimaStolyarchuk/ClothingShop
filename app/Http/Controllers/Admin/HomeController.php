<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homes = Product::get();
        return view('admin.home', compact('homes'));
    }

    public function home_form()
    {
        $homes = [];
        return view('admin.home_form', compact('homes'));
    }

    public function save_home(Request $request)
    {

        $request->file('image')->store('unloads', 'public');

        $homes = $request->all();
        Product::updateOrCreate([
            'id' => $homes['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $homes['name'],
            'price' => $homes['price'],
            'slug' => $homes['slug'],
            'action' => $homes['action'],
            'priority' => $homes['priority'],
        ]);
        return back();
    }

    public function edit_home($id)
    {
        $homes = Product::where('id', $id)->first();
        return view('admin.edit_home', compact('homes'));
    }

    public function delete_home($id)
    {
        Product::where('id', $id)->delete();
        return back();
    }

}
