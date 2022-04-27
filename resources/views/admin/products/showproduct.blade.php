@extends('layouts.admin')

@section('content')
    <div class="container text-center edit">
        <h1 class="mt-5">({{ $allproducts->name }}) Information</h1>
        <div><img src="{{ asset('img') }}/{{ $allproducts->image }}" height="200vh"
                class="woman mt-4"></div>
        <div class="row show mt-4">
            <div class="col">
                <h3>Product Name:<span class="fw-normal"> {{ $allproducts->name }}</span> </h3>
                <h3>Price:<span class="fw-normal"> {{ $allproducts->price }}</span> </h3>
                <h3>Offer:<span class="fw-normal"> {{ $allproducts->offer }}</span> </h3>
                <h3>Type of Product:<span class="fw-normal"> {{ $allproducts->type_of_product }}</span> </h3>

                <h3>created_at:<span class="fw-normal"> {{ $allproducts->created_at }}</span> </h3>
                <h3>Moderator_id:<span class="fw-normal"> {{ $allproducts->user_id }}</span> </h3>

            </div>
        </div>
    </div>
@endsection
