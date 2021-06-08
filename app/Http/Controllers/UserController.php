<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function login(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('home');
        }
    }

    function register(Request $req)
    {
        $user= new User;
        $user->fname=$req->fname;
        $user->lname=$req->lname;
        $user->phone=$req->phone;
        $user->email=$req->email;
        $user->role=$req->role;
        $user->password= Hash::make($req->password);
        $user->save();
        return redirect('login');
    }
}
