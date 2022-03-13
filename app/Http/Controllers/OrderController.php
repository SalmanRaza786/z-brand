<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //ordersList
    public function  ordersList(){

        $data['orders']=Order::join('products','products.id','=','orders.product_id')
            ->select('products.image as image','products.name as p_name','orders.*')
            ->orderBy('orders.id','desc')->get();
             return view('admin.orders.orders-list')->with(compact('data'));;
    }


    public  function updateOrderStatus($id){

        $order= Order::find($id);
        $order->status='Complete';
        $order->save();
        return redirect()->back()->withSuccess('Order updated successfully ');
    }
}
