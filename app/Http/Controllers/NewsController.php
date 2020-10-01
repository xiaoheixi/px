<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{
    public function index()
    {
        $news = news::all();
        return view('newsManagement', compact('news'));
    }
    public function create()
    {
        //This will load create.blade.php
        return view('createNews');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'newsName'            =>  'required',
            'newsDescription'              =>  'required',
            'newsLink'      =>  'required',
        ]);
        $news = new news([
            'newsName'            =>    $request->get('newsName'),
            'newsDescription'              =>    $request->get('newsDescription'),
            'newsLink'      =>    $request->get('newsLink'),
        ]);
        $news->save();
        return redirect('/ne');
    }
    public function show($newsName)
    {
            $newsContent = DB::table('news')->where('newsName',$newsName)->first();
            return view('page.dynamic', ['newsContent' => $newsContent]);

    }
    public function edit($newsName)
    {
        $newsContent = DB::table('news')->where('newsName',$newsName)->first();
        return view('editNews', ['newsContent' => $newsContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'newsName' => 'required|exists:news,newsName',
            'newsDescription' => 'required',
            'newsLink' => 'required'
        ]);
        $obj = \App\news::where('newsName', $request->newsName)
            ->update([
                'newsDescription' => $request->newsDescription,
                'newsLink' => $request->newsLink
           ]);
        return redirect('/ne');
    }
    public function destroy(Request $request)
    {
        $obj = \App\news::where('newsName', $request->newsName)
        ->delete();
        return redirect('/ne');
    }
}
