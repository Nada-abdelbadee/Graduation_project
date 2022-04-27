@extends('layouts.admin')

@section('content')
    <div class="p-5 rounded container">
        <div class="row">
            <div class="col border">
                <a href="{{route('users.index')}}" class="btn mora border border-dark my-2">Users</a>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                    @foreach ($users as $user)
                        
                    <h5 id="item-1">UserName:{{$user->name}}</h5>
                    <p id="item-1-1">UserEmail:{{$user->email}}</p>
                    <p id="item-1-2">UserrRole:{{$user->role_id}}</p>
                    <p id="item-1-2">UpdatedAt{{$user->updated_at}}</p>
                    <p id="item-1-2">CreatedAt{{$user->created_at}}</p>
                    <br>
                    <hr>
                    @endforeach
                    
                  </div>
            </div>
            <div class="col border">
                <a href="{{route('products.index')}}" class="btn mora border border-dark my-2">Products</a>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                    @foreach ($products as $product)
                        
                    <h5 id="item-1">ProductName:{{$product->name}}</h5>
                    <p id="item-1-1">ProductPrice:{{$product->price}}</p>
                    <p id="item-1-1">ProductOffer:{{$product->offer}}</p>
                    <p id="item-1-1">TypeOfProduct:{{$product->type_of_product}}</p>
                    <p id="item-1-1">WhoCreatedProduct{{$product->user_id}}</p>
                    <p id="item-1-1">UpdatedAt{{$product->updated_at}}</p>
                    <p id="item-1-1">CreatedAt{{$product->created_at}}</p>
                 
                  
                    <br>
                    <hr>
                    @endforeach
                  </div>
            </div> 
            <div class="col border">
                <a href="{{url('admin/carts')}}" class="btn mora border border-dark my-2">Users Activity</a>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                    @foreach ($carts as $cart)
                        
                    <h5 id="item-1">UserId{{$cart->name}}</h5>
                    <p id="item-1-1">ProductName{{$cart->product_title}}</p>
                    <p id="item-1-1">ProductId{{$cart->product_id}}</p>
                    <p id="item-1-1">PriceOfProduct:{{$cart->price}}</p>
                    <p id="item-1-1">Quantity:{{$cart->quantity}}</p>
                    <p id="item-1-1">UpdatedAt{{$cart->updated_at}}</p>
                    <p id="item-1-1">CreatedAt{{$cart->created_at}}</p>

                  
                    <br>
                    <hr>
                    @endforeach
            </div>
             
        </div>
@endsection