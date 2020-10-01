<?php

namespace App\Http\Controllers;

use App\AdminSideNav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSideNavController extends Controller
{
    public function index()
    {
        $adminSideNavContent = AdminSideNav::all();
        return view('adminSideNavManagement', compact('adminSideNavContent'));
    }
    public function create()
    {
        return view('createAdminSideNav');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'adminSideNavName'            =>  'required',
            'adminSideNavLink'              =>  'required',
        ]);
        $adminSideNavContent = new AdminSideNav([
            'adminSideNavName'            =>    $request->get('adminSideNavName'),
            'adminSideNavLink'              =>    $request->get('adminSideNavLink'),
        ]);
        $adminSideNavContent->save();
        return redirect('/asn');
    }
    public function show($adminSideNavName)
    {
        $adminSideNavContent = DB::table('admin_side_navs')->where('adminSideNavName',$adminSideNavName)->first();
        return view('page.dynamicCard', ['adminSideNavContent' => $adminSideNavContent]);
    }
    public function edit($adminSideNavName)
    {
        $adminSideNavContent = DB::table('admin_side_navs')->where('adminSideNavName',$adminSideNavName)->first();
        return view('editAdminSideNav', ['adminSideNavContent' => $adminSideNavContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'adminSideNavName' => 'required|exists:admin_side_navs,adminSideNavName',
            'adminSideNavLink' => 'required'
        ]);
        $obj = \App\AdminSideNav::where('adminSideNavName', $request->adminSideNavName)
            ->update([
                'adminSideNavLink' => $request->adminSideNavLink
           ]);
        return redirect('/asn');
    }
    public function destroy(Request $request)
    {
        $obj = \App\AdminSideNav::where('adminSideNavName', $request->adminSideNavName)
        ->delete();
        return redirect('/asn');
    }
}
