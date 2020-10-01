<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\radioShow;
class RadioShowController extends Controller
{
    public function index()
    {
        $radioContent = radioShow::all();
        return view('radioManagement', compact('radioContent'));
    }
    public function create()
    {
        return view('createRadio');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'fileName'            =>  'required',
            'file' => 'required|mimes:mp3',
        ]);
        $image_file = $request->file('file');
        $image_path = $image_file->storeAs('audio', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/audio');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $radioContent = new radioShow([
            'fileName'            =>    $request->get('fileName'),
            'file' => $image_path,
        ]);

        $radioContent->save();
        return redirect('/r');
    }
    public function show($fileName)
    {
        $radioContent = DB::table('radio_shows')->where('fileName',$fileName)->first();
        return view('page.dynamic', ['radioContent' => $radioContent]);
    }
    public function edit($fileName)
    {
        $radioContent = DB::table('radio_shows')->where('fileName',$fileName)->first();
        return view('editRadio', ['radioContent' => $radioContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'fileName' => 'required|exists:radio_shows,fileName',
            'file' => 'required|mimes:mp3',
        ]);
        $image_file = $request->file('file');
        $image_path = $image_file->storeAs('audio', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/audio');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $obj = \App\radioShow::where('fileName', $request->fileName)
            ->update([
                'file' => $image_path,
           ]);
        return redirect('/r');
    }
    public function destroy(Request $request)
    {
        $obj = \App\radioShow::where('fileName', $request->fileName)
        ->delete();
        return redirect('/r');
    }
}
