<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\administrators;
use DB;
use Illuminate\Database\MySqlConnection;

class AdministratorsController extends Controller
{
    public function index()
    {
        $adminContent = administrators::all();
        return view('adminManagement', compact('adminContent'));
    }
    public function create()
    {
        return view('createAdmin');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'adminName'            =>  'required',
            'adminUsername' => 'required',
            'adminPassword'            =>  'required',
            'adminEmail'              =>  'required|email'
        ]);
        $adminContent = new administrators([
            'adminName'            =>    $request->get('adminName'),
            'adminUsername'            =>    $request->get('adminUsername'),
            'adminPassword'              =>    $request->get('adminPassword'),
            'adminEmail'            =>    $request->get('adminEmail')
        ]);
        $adminContent->save();
        return redirect('/a');
    }
    public function show($adminName)
    {
        $adminContent = DB::table('administrators')->where('adminName',$adminName)->first();
        return view('page.dynamic', ['adminContent' => $adminContent]);
    }
    public function edit($adminName)
    {
        $adminContent = DB::table('administrators')->where('adminName',$adminName)->first();
        return view('editAdmin', ['adminContent' => $adminContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'adminName' => 'required|exists:administrators,adminName',
            'adminUsername' =>  'required',
            'adminPassword' =>  'required',
            'adminEmail' =>  'required|email',
        ]);
        $obj = \App\administrators::where('adminName', $request->adminName)
            ->update([
                'adminUsername' => $request->adminUsername,
                'adminPassword' => $request->adminPassword,
                'adminEmail' => $request->adminEmail
           ]);
        return redirect('/a');
    }
    public function destroy(Request $request)
    {
        $obj = \App\administrators::where('adminName', $request->adminName)
        ->delete();
        return redirect('/a');
    }
    public function authenticate(Request $request)
    {
        $data = request()->validate([
            'adminUsername' => 'required|exists:administrators,adminUsername',
            'adminPassword'            =>  'required|exists:administrators,adminPassword'
        ]);
        $credentials = $request->only('adminUsername', 'adminPassword');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        else{
            return URL('/page/adminLogin');
        }
    }
}
