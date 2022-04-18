<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        return view('backend.product.index');
    }


    public function create()
    {
        return view('backend.product.create');
    }


    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            "title" => "required",
            "category" => "required",
            "tag" => "required",
            "strategy" => "required",
            "price" => "required",
            "address" => "required",
            "photo"=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($valid->fails()){
            return Redirect::back()->withErrors($valid->messages())->withInput();
        }
        $product = Product::create([
            "title" => $request->title,
            "category" => $request->category,
            "tags" =>$request->tag,
            "strategy" => $request->strategy,
            "price" => $request->price,
            /*"address" => $request->address,*/
        ]);
        if ($file = $request->file('photo')){
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $photo = 'upload/product/'.$name;
            Storage::disk('public')->put($photo,file_get_contents($file));
            Media::create([
                'model_type' => 'App\Models\Product',
                'model_id' => $product->id,
                'type' => $ext,
                'url' => $photo,
                'file_name' => $name,
                'size' => $size
            ]);
        }
        return Redirect::route('backend.product.index')->with('success','Product Add successfully');
    }


    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
