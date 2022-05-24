<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Protypes;
use App\Helper\CartHelper;

class CartController extends Controller
{
    //
    public function view(){
        $protype = Protypes::all();
        return view('checkout',['dulieu'=>$protype]);
    }

    public function add(CartHelper $cart,$id){
        $product = Products::find($id);
        $cart->add($product);
        return redirect()->back();
    }

    public function remove(CartHelper $cart,$id){
        $cart->remove($id);
        return redirect()->back();
    }

    public function update(CartHelper $cart,$id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $cart->update($id,$quantity);
        return redirect()->back();
    }

    public function clear(CartHelper $cart){
        $cart->clear();
        return redirect()->back();
    }
}