<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
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
     if($data)
     {
        $cat = Product::select('category_id')
                ->where('id',$id)
                ->first()->category_id;
            return view('detail')
              ->with('data',$data)
              ->with('cat',$cat);
     }
     else{
         return 'failed';
     }
        
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
            $data->tumbo_kiuno=$req->tumbo_kiuno;
            $data->hipsi=$req->hipsi;
            $data->paja=$req->paja;
            $data->goti=$req->goti;
            $data->upana_chini=$req->upana_chini;
            $data->fly=$req->fly;
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

        function l_shirt()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',2)
            ->select('products.*')
            ->get();
            return view('category',['dress'=>$dress]);
        }

        
        function s_shirt()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',1)
            ->select('products.*')
            ->get();
            return view('category',['dress'=>$dress]);
        }

        
        function short()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',5)
            ->select('products.*')
            ->get();
            return view('category',['dress'=>$dress]);
        }

        
        function m_trouse()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',6)
            ->select('products.*')
            ->get();
            return view('category',['dress'=>$dress]);
        }

        
        function w_trouse()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',4)
            ->select('products.*')
            ->get();
            return view('category',['dress'=>$dress]);
        }

        
        function skirt()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',3)
            ->select('products.*')
            ->get();
            return view('category',['dress'=>$dress]);
        }

        function sshirt ()
        {
            return $dress1=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->select('products.category_id',1)
            ->get();
            session(['dress1'=>$dress1]);
        }

        function category_lshirt ()
        {
            $dress2=2;
            return $dress2;
            Products::where('category_id',2)
            ->select('category_id')
            ->get();
            session(['dress2'=>$dress2]);

        }

        function category_skirt ()
        {
            $dress3=Products::where('category_id',3)
            ->select('category_id')
            ->get();
            session(['dress3'=>$dress3]);

        }

        function category_wtrouse ()
        {
            $dress4=Products::where('category_id',4)
            ->select('category_id')
            ->get();
            session(['dress4'=>$dress4]);

        }

        function category_short ()
        {
            $dress5=Products::where('category_id',5)
            ->select('category_id')
            ->get();
            session(['dress5'=>$dress5]);

        }

        function category_mtrouse ()
        {
            $dress6=Products::where('category_id',6)
            ->select('products.*')
            ->get();
            session(['dress6'=>$dress6]);

        }
}

