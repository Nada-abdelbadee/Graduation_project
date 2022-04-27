@extends('layouts.app')

@section('content')
<div class="container items">
    <h1 class="mt-5 text-center">All Items</h1>
<div class="row mt-4">
    @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 item position-relative mt-4">
            <img src="{{ asset('img') }}/{{ $product->image }}" class="woman" alt="women">
            <div class="position-absolute  top-0 end-0 price py-1 px-2">
                {{ $product->price }}
            </div>
            <div class="position-absolute rounded-circle off text-center">
                <p class="mx-2">{{ $product->offer }}% <br>off</p>
            </div>
            <h5 class="star mt-2">{{ $product->name }}</h5>

            <div class="px-0 w-50 stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star star"></i>
            </div>
            <div class="px-0 w-50 mt-3 star">
                <a href=""><i class="fa-solid fa-heart rounded-circle border p-2"></i></a>
                <a href=""> <i class="fa-solid fa-cart-shopping rounded-circle border p-2"></i></a>
                <a href=""><i class="fa-solid fa-share rounded-circle border p-2"></i></a>
            </div>
            
        </div>
        @endforeach
    </div>
</div>

@endsection


