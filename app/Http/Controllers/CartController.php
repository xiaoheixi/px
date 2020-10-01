<?php

namespace App\Http\Controllers;

use App\Product;

class CartController extends Controller
{
    public function add(Product $product)
    {
        //add to cart
        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return redirect()->to('/page/cart');
    }
    public function destroy($itemId)
    {
        \Cart::remove($itemId);
        return back();
    }
    public function update($rowId) {
        \Cart::update($rowId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);
        return back();
    }
    public function checkout()
    {
        return redirect()->to('/page/checkOut');
    }
}
