<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use Image;
class ProductController extends Controller
{
    public function index()
    {
        $productContent = Product::all();
        return view('productManagement', compact('productContent'));
    }
    public function create()
    {
        return view('createProduct');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'            =>  'required',
            'description' => 'required',
            'price' => 'required',
            'cover_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
            'productLink' => 'required'
        ]);
        $image_file = $request->file('cover_img');
        $image_path = $image_file->storeAs('images', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/images');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $productContent = new Product([
            'name'            =>    $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'cover_img' => $image_path,
            'type' => $request->get('type'),
            'productLink' => $request->get('productLink')
        ]);
        $productContent->save();
        return redirect('/pr');
    }
    public function show($name)
    {
        $productContent = DB::table('products')->where('name',$name)->first();
        return view('page.dynamic', ['productContent' => $productContent]);
    }
    public function edit($name)
    {
        $productContent = DB::table('products')->where('name',$name)->first();
        return view('editProduct', ['productContent' => $productContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|exists:products,name',
            'description' => 'required',
            'price' => 'required',
            'cover_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
            'productLink' => 'required'
        ]);
        $image_file = $request->file('cover_img');
        $image_path = $image_file->storeAs('images', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/images');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $obj = \App\Product::where('name', $request->name)
            ->update([
                'description' => $request->get('description'),
                'price' => $request->get('price'),
                'cover_img' => $image_path,
                'type' => $request->get('type'),
                'productLink' => $request->get('productLink')
           ]);
        return redirect('/pr');
    }
    public function destroy(Request $request)
    {
        $obj = \App\Product::where('name', $request->name)
        ->delete();
        return redirect('/pr');
    }
}
