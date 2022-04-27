<?php

namespace App\Http\Controllers\Admins;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\TypeOfProduct;
use GuzzleHttp\Handler\Proxy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allproduct = Product::all();
        $categories = Category::all();
        $user = Auth::user();
        return view('admin.products.allcategory' ,compact('allproduct' , 'categories' , 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $typeOfProduct = TypeOfProduct::all();
        $categories = Category::all();
        return view('admin.products.createproduct', compact('categories' , 'typeOfProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        // $request->validated();
        $image = $request->file('image');
        $productImage = time().'_'.$image->getClientOriginalName();

        // $extension = $image->getClientOriginalExtension();
        $image->move('img' ,  $productImage);

        Product::create([
            'category' => $request->category,
            'name' => $request->name,
            'image'=> $productImage,
            'price' => $request->price,
            'offer' => $request->offer,
            'type_of_product' =>$request->typeofproduct,
            'user_id' => Auth::user()->id,
        ]);
        return $request;
        $typeOfProduct = TypeOfProduct::all();
        $categories = Category::all();
        $allproduct = Product::all();
        return view('admin.products.allcategory' , compact('allproduct' ,'categories' , 'typeOfProduct' ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allproducts = Product::findOrFail($id);
        $allproduct = Product::all();
        // $categories = Category::findOrFail($id);
        return view('admin.products.showproduct',compact('allproduct', 'allproducts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeOfProduct = TypeOfProduct::all();
        $allproduct = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.editproduct',compact('allproduct' , 'categories' , 'typeOfProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $productImage = time().'_'.$image->getClientOriginalName();
        // $extension = $image->getClientOriginalExtension();
        $image->move('img' ,  $productImage);
        
        $allproduct = Product::findOrFail($id);
        $allproduct->update([
            'name'=>$request->product,
            'category'=>$request->category,
            'image'=>$productImage,
            'price'=>$request->price,
            'offer'=>$request->offer,
            'type_of_product' =>$request->typeofproduct,

    ]);
        $typeOfProduct = TypeOfProduct::all();
        $categories = Category::all();
        $allproduct = Product::all();
        return view('admin.products.allcategory' , compact('allproduct' , 'categories' , 'typeOfProduct'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Product::findOrFail($id);
        $categories->delete();
        return redirect()->back();

    }
}
