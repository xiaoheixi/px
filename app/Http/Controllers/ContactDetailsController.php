<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactDetails;
use Illuminate\Support\Facades\DB;

class ContactDetailsController extends Controller
{
    public function index()
    {
        $contactDetail = contactDetails::all();
        return view('contactManagement', compact('contactDetail'));
    }
    public function create()
    {
        return view('createContact');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'contactName'            =>  'required',
            'contactOffice'            =>  'required',
            'contactPostal'              =>  'required',
            'contactAddress'            =>  'required',
            'contactEmail'              =>  'required|email',
        ]);
        $contactDetail = new contactDetails([
            'contactName'            =>    $request->get('contactName'),
            'contactOffice'            =>    $request->get('contactOffice'),
            'contactPostal'              =>    $request->get('contactPostal'),
            'contactAddress'            =>    $request->get('contactAddress'),
            'contactEmail'              =>    $request->get('contactEmail'),
        ]);
        $contactDetail->save();
        return redirect('/c');
    }
    public function show($contactName)
    {
        $contactDetail = DB::table('contact_details')->where('contactname',$contactName)->first();
        return view('page.dynamic', ['contactDetail' => $contactDetail]);
    }
    public function edit($contactName)
    {
        $contactDetail = DB::table('contact_details')->where('contactName',$contactName)->first();
        return view('editContact', ['contactDetail' => $contactDetail]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'contactName' => 'required|exists:contact_details,contactName',
            'contactOffice' =>  'required',
            'contactPostal' =>  'required',
            'contactAddress' =>  'required',
            'contactEmail' =>  'required|email',
        ]);
        $obj = \App\contactDetails::where('contactName', $request->contactName)
            ->update([
                'contactOffice' => $request->contactOffice,
                'contactPostal' => $request->contactPostal,
                'contactAddress' => $request->contactAddress,
                'contactEmail' => $request->contactEmail
           ]);
        return redirect('/c');
    }
    public function destroy(Request $request)
    {
        $obj = \App\contactDetails::where('contactName', $request->contactName)
        ->delete();
        return redirect('/c');
    }
}
