@extends('layouts.admin')

@section('content')

    <h1>Users Activity</h1>
    <div class="container mt-5 tab">
        <table class="table text-center">
            <thead>
              <tr>
                {{-- <th scope="col">Id</th> --}}
                <th scope="col">User_Id</th>
                <th scope="col">Product_Name</th>
                <th scope="col">Product_Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Product_Id</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Control</th>
              </tr>
            </thead>
           <tbody>
            @foreach ($carts as $cart)
            <tr>
              <td>{{$cart->name}}</td>
              <td>{{$cart->product_title}}</td>
              <td>{{$cart->price}}</td>
              <td>{{$cart->quantity}}</td>
              <td>{{$cart->product_id}}</td>
              <td>{{$cart->created_at}}</td>
              <td>{{$cart->Updated_at}}</td>
              <td class="d-flex del">
                  <a href="#" class="btn show rounded-0 border-dark">Approve</a>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table> 
    </div>

@endsection