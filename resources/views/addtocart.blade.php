@extends('layouts.app')


@section('content')
<div class="container text-center ">
        @foreach ($userCartItems as $cart)
            <div class="row border mt-5 w-100 ">
                <div class="col">
                    <h3 class=" showit">{{ $cart->product_title }}</h3>
                    <p class="showit">price: {{ $cart->price }}LE </p>
                </div>
                <div class="col mt-1">
                    <form action="{{ url('addcart' , $cart->products->id) }}" method="POST">
                        @csrf
                        <label for="" class="me-5 mt-2">Quantity:</label>
                        <input type="number" value="{{ $cart->quantity }}" min="1" class="form-control num "
                            style="width: 110px" name="addcart" readonly>
                        <br>
                    </form>
                </div>
                <div class="col mt-4">
                    <form method="GET" action="{{route('destroy', $cart->id)}}">
                        @csrf
                    <input type="submit" class="btn rounded-0 border-dark ms-2 mora mt-2" value="remove">
                  </form>
                </div>
            </div>
            @endforeach
        </div>
@endsection
