<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
function index()
{
    $data=Product::all();
        return view('product',['products'=>$data]);
}

function detail($id)
{
    $data=Product::find($id);
    return view('detail',['products'=>$data]);

}
function search(Request $req)
    {
        $data=$data=Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $data= new Cart;
            $data->persons_id=$req->session()->get('user')['id'];
            $data->product_id=$req->product_id;
            $data->save();
            return redirect('home');
            
        }
        else
        {
            return redirect('login');
        }
    }

    static function cartItem()
        {
            $userId= Session::get('user')['id'];
            return Cart::where('persons_id',$userId)->count();
        }
        function cartList()
        {
            $userId=Session::get('user')['id'];
            $products= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.persons_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();
            return view('cartList',['products'=>$products]);
        }
        function removeCart($id)
        {
            Cart::destroy($id);
            return redirect('cartlist');
        }

        function orderNow()
        {
            $userId=Session::get('user')['id'];
            $total=DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.persons_id',$userId)
            ->sum('products.price');
            return view('ordernow',['total'=>$total]);
        }

        function orderPlace(Request $req)
        {
            $userId=Session::get('user')['id'];
            $allCart=Cart::where('persons_id',$userId)->get();
            foreach($allCart as $cart)
            {
                $order= new Order;
                $order->product_id=$cart['product_id'];
                $order->persons_id=$cart['persons_id'];
                $order->order_status="pending";
                $order->payment_method=$req->payment;
                $order->address=$req->address;
                $order->phone=$req->phone;
                $order->order_description=$req->description;
                $order->save();
                $allCart=Cart::where('persons_id',$userId)->delete();

            }
            
            return redirect('home');
        }

        function myOrders()
        {
            $userId=Session::get('user')['id'];
            $order=DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.persons_id',$userId)
            ->get();
            return view('myorders',['order'=>$order]);
        }

    
}

