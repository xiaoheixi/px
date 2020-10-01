<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\transactions;
use App\Product;
use DB;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactionContent = transactions::all();
        return view('transactionManagement', compact('transactionContent'));
    }
    public function create()
    {
        return view('createTransaction');
    }
    public function store(Request $request){
        $data = request()->validate([
            'firstName'            =>  'required',
            'lastName' => 'required',
            'email'      =>  'required|email',
            'paymentMethod'      =>  'required',
            'productName'      =>  'required',
            'productPrice' => 'required',
            'totalPrice' => 'required',
            'quantity' => 'required'
        ]);
        do {
            $number = mt_rand(111111111, 999999999);
        } while ( DB::table( 'transactions' )->where( 'transactionID', $number )->exists() );
        $transactionContent = new transactions([
            'transactionID' => $number,
            'firstName'            =>    $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'email'      =>    $request->get('email'),
            'paymentMethod'      =>  $request->get('paymentMethod'),
            'productName'      =>  $request->get('productName'),
            'productPrice' => $request->get('productPrice'),
            'totalPrice' => $request->get('totalPrice'),
            'quantity' => $request->get('quantity')
        ]);
        $transactionContent->save();
        return redirect('/t');
    }
    public function show($transactionID)
    {
        $transactionContent = DB::table('transactions')->where('transactionID',$transactionID)->first();
        return view('page.dynamic', ['transactionContent' => $transactionContent]);
    }
    public function edit($transactionID)
    {
        $transactionContent = DB::table('transactions')->where('transactionID',$transactionID)->first();
        return view('editTransaction', ['transactionContent' => $transactionContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'firstName'            =>  'required',
            'lastName' => 'required',
            'email'      =>  'required|email',
            'paymentMethod'      =>  'required',
            'productName'      =>  'required',
            'productPrice' => 'required',
            'totalPrice' => 'required',
            'quantity' => 'required'
        ]);
        do {
            $number = mt_rand(111111111, 999999999);
        } while ( DB::table( 'transactions' )->where( 'transactionID', $number )->exists() );
        $obj = \App\transactions::where('transactionID', $request->transactionID)
            ->update([
                'firstName' => $request->get('firstName'),
                'lastName' => $request->get('lastName'),
                'email' => $request->get('email'),
                'paymentMethod' => $request->get('paymentMethod'),
                'productName' => $request->get('productName'),
                'productPrice' => $request->get('productPrice'),
                'totalPrice' => $request->get('totalPrice'),
                'quantity' => $request->get('quantity')
           ]);
        return redirect('/t');
    }
    public function destroy(Request $request)
    {
        $obj = \App\transactions::where('transactionID', $request->transactionID)
        ->delete();
        return redirect('/t');
    }
}