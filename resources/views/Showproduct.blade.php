@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row g-0">
            <div class="col showpro mt-3">
                <img src="{{ asset('img') }}/{{ $product->image }}" class="img" alt="{{ $product->name }}">
            </div>
            <div class="col text-center mt-5">
                <h3 class=" showit">{{ $product->name }}</h3>
                <h3 class=" showit">Price: {{ $product->price }} LE</h3>
                <h3 class=" showit mb-4">Offer: {{ $product->offer }} %</h3>
                <form action="{{url('addcart' , $product->id )}}" method="POST">
                    @csrf
                    <input type="number" value="1" min="1" class="form-control num " style="width: 155px" name="addcart">
                    <br>
                <input class="btn btn-success px-5" type="submit" value="Add To Cart">
                <a href="" class="me-5"><i class="fa-solid fa-heart rounded-circle border p-2 ms-2"></i></a>
            </form>
            </div>
        </div>
    </div>
@endsection
