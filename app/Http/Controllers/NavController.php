<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nav;
use Illuminate\Support\Facades\DB;
class NavController extends Controller
{
    public function index()
    {
        $navs = Nav::all();
        return view('navManagement', compact('navs'));
    }
    public function create()
    {
        return view('createNav');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'navName'            =>  'required',
            'navLink'              =>  'required',
        ]);
        $nav = new Nav([
            'navName'            =>    $request->get('navName'),
            'navLink'              =>    $request->get('navLink'),
        ]);
        $nav->save();
        return redirect('/n');
    }
    public function show($navName)
    {
        $navContent = DB::table('navs')->where('navName',$navName)->first();
        return view('page.dynamic', ['navContent' => $navContent]);
    }
    public function edit($navName)
    {
        $navContent = DB::table('navs')->where('navName',$navName)->first();
        return view('editNav', ['navContent' => $navContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'navName' => 'required|exists:navs,navName',
            'navLink' => 'required'
        ]);
        $obj = \App\Nav::where('navName', $request->navName)
            ->update([
                'navLink' => $request->navLink
           ]);
        return redirect('/n');
    }
    public function destroy(Request $request)
    {
        $obj = \App\Nav::where('navName', $request->navName)
        ->delete();
        return redirect('/n');
    }
}
