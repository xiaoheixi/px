<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\carousel;
use Image;
use DB;
class CarouselController extends Controller
{
    public function index()
    {
        $carousel = carousel::all();
        return view('carouselManagement', compact('carousel'));
    }
    public function create()
    {
        return view('createCarousel');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'carouselName'            =>  'required',
            'carouselImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image_file = $request->file('carouselImage');
        $image_path = $image_file->storeAs('images', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/images');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $carousel = new carousel([
            'carouselName'            =>    $request->get('carouselName'),
            'carouselImage' => $image_path,
        ]);
        $carousel->save();
        return redirect('/ca');
    }
    public function show($carouselName)
    {
        $carouselContent = DB::table('carousels')->where('carouselName',$carouselName)->first();
        return view('page.dynamic', ['carouselContent' => $carouselContent]);
    }
    public function edit($carouselName)
    {
        $carouselContent = DB::table('carousels')->where('carouselName',$carouselName)->first();
        return view('editCarousel', ['carouselContent' => $carouselContent]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'carouselName' => 'required|exists:carousels,carouselName',
            'carouselImage' => 'required',
        ]);
        $image_file = $request->file('carouselImage');
        $image_path = $image_file->storeAs('images', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/images');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $obj = \App\carousel::where('carouselName', $request->carouselName)
            ->update([
                'carouselImage' => $image_path,
           ]);
        return redirect('/ca');
    }
    public function destroy(Request $request)
    {
        $obj = \App\carousel::where('carouselName', $request->carouselName)
        ->delete();
        return redirect('/ca');
    }
}