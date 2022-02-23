<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = ['session_id', 'product_id','price', 'quantity'];
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


//    public function flush()
//    {
//        return self::where(["session_id"=>session()->getId()])->delete();
//    }



//    public function count()
//    {
//        return self::where(["session_id"=>session()->getId()])->sum('quantity');
//    }
//
//    public function add($product_id)
//    {
//        $product = ProductsHome::findOrFail($product_id);
//
//        if ($basket = self::where(["session_id"=>session()->getId(), "product_id"=>$product->id])->first())
//        {
//            $basket->quantity++;
//            $basket->save();
//        } else {
//            $basket = self::create([
//               "session_id" => $product->id,
//                "product_id" => 1,
//                "price" => $product->price,
//            ]);
//        }
//        return $basket;
//    }
//
//    public function remove($id)
//    {
//        return self::destroy($id);
//    }
//

//
//    public function total()
//    {
//        return self::where(["session_id"=>session()->getId()])->get()->map(function ($item){
//            return $item->prise * $item->quantity;
//        })->sum();
//    }
//
//    public function product()
//    {
//        return $this->belongsTo(ProductsHome::class);
//    }
}
