<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;


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
}
