<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pcart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $product = Product::find($id);
        return view('detail',['details'=>$product]);
    }
    function search(Request $req){
       
         $data = Product::where('category','like','%'.$req->input('query').'%')->get();
         return view('search',['objects'=>$data]);
    }

    function addToCart(Request $req){

        if($req->session()->has('user')){
            
            $cart = new Pcart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('/login');
        }
        
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Pcart::where('user_id',$userId)->count();
    }

    function cartlist(){
            $userId = Session::get('user')['id'];
            $product = DB::table('pcart')->join('products','pcart.product_id','=','products.id')
            ->where('pcart.user_id',$userId)
            ->select('products.*','pcart.id as cart_id')->get();
            return view('cartlist',['products'=>$product]);
    }

    function removecart($id){
        Pcart::destroy($id);
        return redirect('/cartlist');
    }

    function order(){
        $userId = Session::get('user')['id'];
        $amount = DB::table('pcart')->join('products','pcart.product_id','=','products.id')
        ->where('pcart.user_id',$userId)
        ->sum('products.price');
        return view('orderlist',['total'=>$amount]);
    }

    function confirmorder(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Pcart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new order;
            $order->product_id =$cart['product_id'];
            $order->user_id =$cart['user_id'];
            $order->status = "Pendding";
            $order->payment_status = $req->payment;
            $order->address = $req->address;
            $order->save();
            Pcart::where('user_id',$userId)->delete();
        }
        return redirect('/');

    }

    function orderlist(){
        $userId = Session::get('user')['id'];
        $order = DB::table('orders')->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myorder',['orders'=>$order]);
        
    }
   

}
