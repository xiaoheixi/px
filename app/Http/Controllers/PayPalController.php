<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Mail\OrderPaid;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);
        $cartItems = array_map( function($item){
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty'=> $item['quantity']
            ];
        }, \Cart::getContent()->toarray());
        $checkoutData = [
            'items'=> $cartItems,
            'return_url'=> route('paypal.success', $orderId),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id'=> uniqid(),
            'invoice_description'=> " Order description ",
            'total' => \Cart::getTotal()
        ];
        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout($checkoutData);
        return redirect($response['paypal_link']);
    }
    private function checkoutData($orderId){
        $cartItems = array_map( function($item){
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty'=> $item['quantity']
            ];
        }, \Cart::getContent()->toarray());
        $checkoutData = [
            'items'=> $cartItems,
            'return_url'=> route('paypal.success', $orderId),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id'=> uniqid(),
            'invoice_description'=> " Order description ",
            'total' => \Cart::getTotal()
        ];
        return $checkoutData;
    }
    public function cancelPage()
    {
        return redirect()->to('/page/checkOut')->withError('Payment Unsuccessful! Something went wrong!');
    }
    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {
        $token = $request->get('token');
        $payerId = $request->get('PayerID');
        $provider = new ExpressCheckout();
        $checkoutData = $this->checkoutData($orderId);
        $response = $provider->getExpressCheckoutDetails($token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWTTHWARNING'])){
            //Perform transaction on PayPal
            $payment_status = $provider->doExpressCHeckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            if(in_array($status, ['Completed', 'Processed'])) {
                $order = Order::find($orderId);
                $order->is_paid = 1;
                $order->status = 'Completed';
                $order->save();

                //Send email!
                Mail::to($order->shipping_email)->send(new OrderPaid($order));
                \Cart::clear();
                return redirect()->to('/page/thankYou')->withMessage('Payment successful!');
            }
        }
        return redirect()->to('/page/checkOut')->withError('Payment Unsuccessful! Something went wrong!');
    }
}
