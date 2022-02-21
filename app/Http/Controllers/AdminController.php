<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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


        return view('admin.products.add-products');
    }
}
