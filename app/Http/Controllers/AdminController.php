<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImages;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){

        return view('admin.dashboard');
    }


    //products
    public  function  products(){

        $data['products']=Product::orderBy('id','desc')->get();
        return view('admin.products.index')->with(compact('data'));;
    }


    //addProduct
    public  function  addProduct(){

        $data['category']=Category::all();
        return view('admin.products.add-products')->with(compact('data'));
    }

    //saveProduct




    public function saveProduct(Request $request){


        $request->all();

        if ($request->hasFile('file')) {
            $uniqueid = uniqid();
            $original_name = $request->file('file')->getClientOriginalName();
            $size = $request->file('file')->getSize();
            $extension = $request->file('file')->getClientOriginalExtension();
            $name = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            $imagepath = url('/storage/products/' . $name);
            $path = $request->file('file')->storeAs('public/products/', $name);
        }



        $product=new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->sale_price=$request->sale_price;
        $product->dsec=$request->desc;
        $product->image=$name;
        $product->save();

        $c=0;
        if($request->has('images')) {
            $c++;
            foreach ($request->file('images') as $image) {

                $uniqueid = uniqid();
                $extension = $image->getClientOriginalExtension();
                $name = Carbon::now()->format('Ymd') . '_' . $c . $uniqueid . '.' . $extension;
                $path = $image->storeAs('public/products/', $name);

                $image= new ProductImages();
                $image->product_id=$product->id;
                $image->image=$name;
                $image->save();
            }
        }

        return redirect()->back()->withSuccess('Product added successfully ');


    }
}
