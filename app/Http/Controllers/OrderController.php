<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderContent = Order::all();
        return view('orderManagement', compact('orderContent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_email' => 'required|email',
            'payment_method' => 'required'
        ]);
        $order = new Order();

        $order->order_number = uniqid('OrderNumber-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_email = $request->input('shipping_email');
        $order->payment_method = $request->input('payment_method');

        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_email = $request->input('shipping_email');
            $order->payment_method = $request->input('payment_method');
        }else {
            $order->shipping_fullname = $request->input('billing_fullname');
            $order->shipping_email = $request->input('billing_email');
            $order->payment_method = $request->input('payment_method');
        }

        $order->grand_total = \Cart::getTotal();
        $order->item_count = \Cart::getContent()->count();

        $order->status = 'pending';
        $order->payment_method = 'paypal';
        $order->save();

        //save order items

        $cartItems = \Cart::getContent();
        foreach($cartItems as $item) {
            $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
        }
        $order->save();
        //payment
            //redirect to paypal
            return redirect()->route('paypal.checkout', $order->id);

        //empty cart
        \Cart::clear();
    }
}
