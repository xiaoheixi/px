<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\footer;
use DB;
use Illuminate\Database\MySqlConnection;
class FooterController extends Controller
{
    public function index()
    {
        $footer = footer::all();
        return view('footerManagement', compact('footer'));
    }
    public function create()
    {
        return view('createFooter');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'footerName' => 'required',
            'footerText'            =>  'required',
            'footerLink'              =>  'required'
        ]);
        $footer = new footer([
            'footerName' => $request->get('footerName'),
            'footerText'            =>    $request->get('footerText'),
            'footerLink'              =>    $request->get('footerLink')
        ]);
        $footer->save();
        return redirect('/f');
    }
    public function show($footerName)
    {
        $footerContent = DB::table('footers')->where('footerName',$footerName)->first();
        return view('page.dynamic', ['footerContent' => $footerContent]);
    }
    public function edit($footerName)
    {
        $footerContent = DB::table('footers')->where('footerName',$footerName)->first();
        return view('editFooter', ['footerContent' => $footerContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'footerName' => 'required|exists:footers,footerName',
            'footerText'=> 'required',
            'footerLink' => 'required'
        ]);
        $obj = \App\footer::where('footerName', $request->footerName)
            ->update([
                'footerText' => $request->footerText,
                'footerLink' => $request->footerLink
           ]);
        return redirect('/f');
    }
    public function destroy(Request $request)
    {
        $obj = \App\footer::where('footerName', $request->footerName)
        ->delete();
        return redirect('/f');
    }
}
