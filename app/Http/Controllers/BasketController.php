<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
//        if(session('basket_user')) {
//            $session = session('basket_user');
//        } else {
//           return redirect()->route('home');
//        }
        $session = '12345';

        $products = Basket::where('session_id', $session)->with('product')->get();

        return view('pages.basket', compact('products'));
    }

    /**
     * @param $product
     */

    public function add(Product $product)
    {
//        if(session('basket_user')) {
//            $session = session('basket_user');
//        } else {
//            $session = session()->put('basket_user', rand());
//        }
        $session = '12345';

        if ($basket = Basket::where(["session_id"=>$session, "product_id"=>$product->id])->first())
        {
            $basket->quantity++;
            $basket->save();
        } else {
            Basket::create([
               "session_id" => $session,
               "product_id" => $product->id
            ]);
        }

        return redirect()->route('basket');
    }

    public function delete($id)
    {

        Basket::where('id', $id)->delete();

        return back();
    }





//    public function update($id)
//    {
//        $this->validate();
//        Basket::quantity($id, intval($this->quantities[$id]));
//    }
//
//    public function updatedAll($value)
//    {
//        $this->ids = $value ? Basket::pluck('id') : [];
//    }
}
