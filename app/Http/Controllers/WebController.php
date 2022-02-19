<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use App\Jobs\OrderMailJob;
use DB;

class WebController extends Controller
{
    //index
    public function index(){
         $data['catwise']=Product::with('catname')->groupBy('cat_id')->paginate(3);

        $data['topSale']= DB::select("select p.*
           from orders o,products p
           WHERE o.product_id=p.id
           group by p.name
           order by sum(o.qty) desc
           limit 8;");


        $data['topCatSale']= DB::select("select c.*
           from orders o,products p,categories c
           WHERE o.product_id=p.id AND p.cat_id=c.id
           group by c.cat_name
           order by sum(o.qty) desc
           limit 8;");



        $data['cat']=Category::all();
         $data['products']=Product::with('catname')->get();
        return view('web.home')->with(compact('data'));
    }

    //productDetail
    public function productDetail($pro_id){

        $data['cat']=Category::all();
        $data['products']=Product::find(decrypt($pro_id));
         $data['images']=ProductImages::where('product_id',decrypt($pro_id))->get();
        return view('web.product-detail')->with(compact('data'));;
    }

    //productByCat

    public function productByCat($cat_id){
         $cat_id=decrypt($cat_id);
        $data['cat']=Category::all();
        $data['products']=Product::with('catname')->where('cat_id',$cat_id)->get();
        return view('web.products')->with(compact('data'));
    }


    //orderNow
    public function orderNow(Request $request)
    {
         $request->all();
        $pro = new Order();
        $pro->product_id = $request->product_id;
        $pro->name = $request->name;
        $pro->email = '';
        $pro->qty = 1;
        $pro->contact = $request->contact;
        $pro->city_name = $request->city_name;
        $pro->address = $request->address;
        $pro->status = 'pending';
        if ($pro->save()) {

            $product=Product::find($request->product_id);
            $details = [
                'name' => $request->name,
                'phone' => $request->contact,
                'address' => $request->address,
                'product' => $product->name,
                'qty' => $request->qty,

            ];
            //OrderMailJob::dispatch($details);
            return redirect()->back()->with('message', 'شکریہ، ہمیں آپ کا آرڈر مل گیا ہے، جلد ہی آپ سے رابطہ کریں گے');

        }
    }
}
