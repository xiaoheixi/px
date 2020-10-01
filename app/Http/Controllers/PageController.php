<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pageManagement', compact('pages'));
    }
    public function create()
    {
        //This will load create.blade.php
        return view('createPage');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'title'            =>  'required',
            'URI'              =>  'required|min:4|max:10|',
            'pageContent'      =>  'required',
        ]);
        $page = new Page([
            'title'            =>    $request->get('title'),
            'URI'              =>    $request->get('URI'),
            'pageContent'      =>    $request->get('pageContent'),
        ]);
        $page->save();
        return redirect('/p');
    }
    public function show($URI)
    {
            $pageContent = DB::table('pages')->where('URI',$URI)->first();
            return view('page.dynamic', ['pageContent' => $pageContent]);

    }
    public function edit($URI)
    {
        $pageContent = DB::table('pages')->where('URI',$URI)->first();
        return view('editPage', ['pageContent' => $pageContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'URI' => 'required|min:4|max:10|exists:pages,URI',
            'pageContent' => 'required'
        ]);
        $obj = \App\Page::where('URI', $request->URI)
            ->update([
                'title' => $request->title,
                'pageContent' => $request->pageContent
           ]);
        return redirect('/p');
    }
    public function destroy(Request $request)
    {
        $obj = \App\Page::where('URI', $request->URI)
        ->delete();
        return redirect('/p');
    }
}
