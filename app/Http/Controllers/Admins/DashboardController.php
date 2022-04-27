<?php

namespace App\Http\Controllers\Admins;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController 
{
    public function index(){
        $users = User::all();
        $products = Product::all();
        $carts = Cart::all();
        return view('dashboard.index' , compact('users' , 'products' , 'carts'));
    }
    public function carts()
    {
        $carts = Cart::all();
        return view ('dashboard.carts' , compact('carts'));
    }

}
