<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $products = Product::all();

        return view('welcome', compact('banners', 'products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('products/detail', compact('product'));
    }

    public function list()
    {
        $products = Product::all();

        return view('products/list', compact('products'));
    }

    public function create()
    {
        return view('products/create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|regex:/^[0-9]*$/',
            'qty' => 'required|regex:/^[0-9]*$/',
            'description' => 'nullable',
            'image' => 'required|max:5120|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->qty = $request->qty;
            $product->description = $request->description;

            $name_image =  $request->file('image')->getClientOriginalName();
            $pathimage = $request->file('image')->move('products', $name_image);
            $product->image = $pathimage;

            $product->save();

            return redirect()->route('products.list')->with('success', 'Success created products.');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Failed create product!");
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products/edit', compact('product'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|regex:/^[0-9]*$/',
            'qty' => 'required|regex:/^[0-9]*$/',
            'description' => 'nullable',
            'image' => 'nullable|max:5120|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $product = Product::find($request->id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->qty = $request->qty;
            $product->description = $request->description;

            if($request->file('image')){
                File::delete(public_path($product->image));
                
                $name_image =  $request->file('image')->getClientOriginalName();
                $pathimage = $request->file('image')->move('products', $name_image);
                $product->image = $pathimage;
            }

            $product->save();

            return redirect()->route('products.list')->with('success', 'Success updated products.');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Failed update product!");
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::find($id);

            if($product){
                File::delete(public_path($product->image));
                Product::destroy($id);
            }
        
            return redirect()->route('products.list')->with('success','Success delete product!');

        } catch (\Throwable $th) {
            return back()->with('error','Failed delete product!');
        }
    }
}
