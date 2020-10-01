<?php

namespace App\Http\Controllers;

use App\sideNav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;

class SideNavController extends Controller
{
    public function index()
    {
        $side_navs = sideNav::all();
        return view('sideNavManagement', compact('side_navs'));
    }
    public function create()
    {
        return view('createSideNav');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'sideNavName'            =>  'required',
            'sideNavLink'              =>  'required',
        ]);
        $side_navs = new sideNav([
            'sideNavName'            =>    $request->get('sideNavName'),
            'sideNavLink'              =>    $request->get('sideNavLink'),
        ]);
        $side_navs->save();
        return redirect('/sn');
    }
    public function show($sideNavName)
    {
        $sideNavContent = DB::table('side_navs')->where('sideNavName',$sideNavName)->first();
        return view('page.dynamicCard', ['sideNavContent' => $sideNavContent]);
    }
    public function edit($sideNavName)
    {
        $sideNavContent = DB::table('side_navs')->where('sideNavName',$sideNavName)->first();
        return view('editSideNav', ['sideNavContent' => $sideNavContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'sideNavName' => 'required|exists:side_navs,sideNavName',
            'sideNavLink' => 'required'
        ]);
        $obj = \App\sideNav::where('sideNavName', $request->sideNavName)
            ->update([
                'sideNavLink' => $request->sideNavLink
           ]);
        return redirect('/sn');
    }
    public function destroy(Request $request)
    {
        $obj = \App\sideNav::where('sideNavName', $request->sideNavName)
        ->delete();
        return redirect('/sn');
    }
}
