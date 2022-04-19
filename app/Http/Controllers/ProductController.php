<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()){
            $plus = Product::all();
            return DataTables::of($plus)
                ->addIndexColumn()
                ->editColumn('status',function ($row){
                    $status_color =  $row->status==1?'success':'danger';
                    $status = $row->status==1?"Active":"InActive";
                    return '<span class="badge bg-'.$status_color.'">'.$status.'</span>';
                })
                ->addColumn('action', function($row){
                    $btn = '<a href="'.route('backend.product.edit',$row).'" class="edit btn btn-primary btn-sm">Edit</a>';
                    $btn .= '<a href="'.route('backend.product.destroy',$row).'" class="edit btn btn-danger btn-sm ms-2">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['status','action'])
                ->make(true);
        }
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
            "address" => $request->address,
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
        $media = Media::where(['model_type' => 'App\Models\Product', 'model_id' => $product->id,])->get();
        return view('backend.product.edit',compact('product','media'));
    }


    public function update(Request $request, Product $product)
    {
        $valid = Validator::make($request->all(), [
            "title" => "required",
            "category" => "required",
            "tag" => "required",
            "strategy" => "required",
            "price" => "required",
            "address" => "required",
        ]);
        if ($valid->fails()){
            return Redirect::back()->withErrors($valid->messages())->withInput();
        }
        $product->update([
            "title" => $request->title,
            "category" => $request->category,
            "tags" =>$request->tag,
            "strategy" => $request->strategy,
            "price" => $request->price,
            "address" => $request->address,
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
        return Redirect::route('backend.product.index')->with('success','Product Update successfully');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('backend.product.index')->with('success','Product delete successfully');
    }
}
