@extends('layouts.admin')

@section('content')
    <div class="container mt-4 category">
        <h1 class="text-center mt-5">{{$categories->name}} Category</h1>
        <div class="row gx-0 w-100 mt-5">
            @foreach ($allcategories as $category)
                <a href="{{ route('categories.show', $category->id )}}"
                    class="col cate text-decoration-none text-center">{{ $category->name }}</a>
            @endforeach
            {{-- <a href="{{ route('categories.show', $categories->id )}}"
                class="col cate text-decoration-none text-center">{{ $categories->name }}</a> --}}
        </div>
        <a href="{{ route('products.create') }}" class="btn fw-bold show rounded-0 border-dark my-5">Add New Product</a>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($categories_product as $products)
                <div class="col position-relative">
                    <div class="p-3"><img src="{{ asset('img') }}/{{ $products->image }}" height="200vh"
                            class="woman"></div>
                    <div class="position-absolute  top-0 end-0 price py-1 px-2">
                        {{ $products->price }}
                    </div>
                    <div class="d-flex w-100 ms-2">
                        <a href="{{ route('products.show', $products->id, $products->name) }}"
                            class="btn show rounded-0 border-dark ms-1">Show</a>
                        <a href="{{ route('products.edit', $products->id, $products->name) }}"
                            class="btn show rounded-0 border-dark">Edit</a>
                        <form method="post" action="{{ route('products.destroy', $products->id) }}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="btn show rounded-0 border-dark" value="Delete">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection