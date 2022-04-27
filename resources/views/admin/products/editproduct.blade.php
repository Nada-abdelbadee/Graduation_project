@extends('layouts.admin')

@section('content')
    <form class="container mt-5 w-75 mb-5 create edit" method="POST" action="{{ route('products.update', $allproduct->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-center mb-4 new">Edit Product</h1>
        <div class="p-3 text-center"><img src="{{ asset('img') }}/{{ $allproduct->image }}" height="200vh"
            class="woman "></div>
        <select class="form-select rounded-0 border-dark mt-5" aria-label="Default select example" name="category">
            <option selected>Choose Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <input type="file" class="form-control rounded-0 border-dark mt-4" name="image" value="{{$allproduct->image}}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control rounded-0 border-dark mt-4" placeholder="Product Name.."
             name="product" value="{{$allproduct->name}}">
        </div>
        <div class="mb-3">
            <input type="integer" class="form-control rounded-0 border-dark mt-4" placeholder="Product cost.." 
            name="price" value="{{$allproduct->price}}">
        </div>
        <div class="mb-3">
            <input type="integer" class="form-control rounded-0 border-dark mt-4" placeholder="Offer Here.."
             name="offer" value="{{$allproduct->offer}}">
        </div>
        <select class="form-select rounded-0 border-dark mt-5" aria-label="Default select example" name="typeofproduct">
            <option selected>Type Of Product</option>
            @foreach ($typeOfProduct as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>


        <button type="submit" class="btn border rounded-0 sub border-dark fw-bold mt-4">Save</button>
    </form>
@endsection
