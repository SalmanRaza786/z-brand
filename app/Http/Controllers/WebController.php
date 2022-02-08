<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //index
    public function index(){
        $data['cat']=Category::all();
         $data['products']=Product::with('catname')->get();
        return view('web.home')->with(compact('data'));
    }

    //productDetail
    public function productDetail(){
        return view('web.product-detail');
    }

    //productByCat

    public function productByCat($cat_id){
         $cat_id=decrypt($cat_id);
        $data['products']=Product::with('catname')->where('cat_id',$cat_id)->get();
        return view('web.products')->with(compact('data'));
    }
}
