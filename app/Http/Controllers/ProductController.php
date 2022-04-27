<?php

namespace App\Http\Controllers;

// use auth;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\TypeOfProduct;
// use Illuminate\Support\Facade\auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
// use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProductController extends Controller
{
    public function showProduct()
    {
    $categories = Category::all();
    $products = Product::all();
    $typeOfProduct = TypeOfProduct::all();
    // $users = User::all();
    $user = Auth::user();
    return view('welcome' , compact('products' , 'categories' ,'typeOfProduct' , 'user'));
    }

    public function showuser($id)
    {
        $users = User::findOrFail($id);
        $id = Auth::id($id);
        $cart = Cart::all();
        return view ('userprofile' , compact('id' , 'users' , 'cart'));
    }
    public function AllProduct()
    {
        $products = Product::all();
        return view('allproduct' , compact('products'));
    }
    public function ShowCategory($id)
    {
        $categories = Category::findOrFail($id);
        $products = Product::all();
        $product_category = Category::findOrFail($id)->product;
        return view('categories' , compact('products' , 'categories' , 'product_category'));
    }
    public function showitem($id)
    {
        $product = Product::findOrFail($id);
        return view('Showproduct' , compact('product'));
    }
    public function addcart(Request $request, $id){
        $user=auth()->user();
        $cart=new Cart;
        $product=Product::findOrFail($id);
        $cart->name=$user->id;
        $cart->product_title = $product->name;
        $cart->price= $product->price;
        $cart->quantity = $request->addcart;
        $cart->product_id = $product->id;
        $cart->save();
        
        return redirect()->back();
        }

        public function search()
        {
            $search_text = $_GET['query'];
            $products = Product::where('name' , 'LIKE' , "%$search_text%" )->get();
            return view('search' , compact('products'));
        }
       public function addtocart($id)
       {
            $product = 
            $userCartItems = Cart::where('name' , Auth::id())->get();
           return view('addtocart' , compact('userCartItems'));
       }
       public function destroy($id)
    {
       $cart =Cart::findOrFail($id);
       $cart->delete();
       return redirect()->back();
    }
}
