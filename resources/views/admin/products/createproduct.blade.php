@extends('layouts.admin')

@section('content')
    <form class="container mt-5 w-75 mb-5 create" method="POST" action="{{ route('products.store', Auth::user()->id) }}"
        enctype="multipart/form-data">
        @csrf
        <h1 class="text-center mb-4 new">Add New Product</h1>
        <select class="form-select rounded-0 border-dark mt-5" aria-label="Default select example" name="category">
            <option selected>Choose Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <input type="file" class="form-control rounded-0 border-dark mt-4 @error('image') is-invalid @enderror" name="image">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control rounded-0 border-dark mt-4 @error('name') is-invalid @enderror" placeholder="Product Name.." name="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="integer" class="form-control rounded-0 border-dark mt-4 @error('price') is-invalid @enderror" placeholder="Product cost.." name="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="integer" class="form-control rounded-0 border-dark mt-4 @error('offer') is-invalid @enderror" placeholder="Offer Here.." name="offer">
            @error('offer')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <select class="form-select rounded-0 border-dark mt-4" aria-label="Default select example" name="type_of_product">
            <option selected>Type Of Product</option>
            @foreach ($typeOfProduct as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>


        <button type="submit" class="btn border rounded-0 sub border-dark fw-bold mt-4">Save</button>
    </form>
@endsection
