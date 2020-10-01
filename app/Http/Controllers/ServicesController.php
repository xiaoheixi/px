<?php

namespace App\Http\Controllers;
use App\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServicesController extends Controller
{
    public function index()
    {
        $services = services::all();
        return view('serviceManagement', compact('services'));
    }
    public function create()
    {
        //This will load create.blade.php
        return view('createService');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'serviceName'            =>  'required',
            'serviceDescription'              =>  'required',
            'serviceLink'      =>  'required',
        ]);
        $services = new services([
            'serviceName'            =>    $request->get('serviceName'),
            'serviceDescription'              =>    $request->get('serviceDescription'),
            'serviceLink'      =>    $request->get('serviceLink'),
        ]);
        $services->save();
        return redirect('/s');
    }
    public function show($serviceName)
    {
            $serviceContent = DB::table('services')->where('serviceName',$serviceName)->first();
            return view('page.dynamic', ['serviceContent' => $serviceContent]);

    }
    public function edit($serviceName)
    {
        $serviceContent = DB::table('services')->where('serviceName',$serviceName)->first();
        return view('editService', ['serviceContent' => $serviceContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'serviceName' => 'required|exists:services,serviceName',
            'serviceDescription' => 'required',
            'serviceLink' => 'required'
        ]);
        $obj = \App\services::where('serviceName', $request->serviceName)
            ->update([
                'serviceDescription' => $request->serviceDescription,
                'serviceLink' => $request->serviceLink
           ]);
        return redirect('/s');
    }
    public function destroy(Request $request)
    {
        $obj = \App\services::where('serviceName', $request->serviceName)
        ->delete();
        return redirect('/s');
    }
}
