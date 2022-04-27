@extends('layouts.app')


@section('content')


    <!-- Slide show -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner header">
            <div class="carousel-item active">
                <img src="imgs/slideshow3copy.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block words">
                    <h5 class="fw-normal font">SMOTHING IS BETTER</h5>
                    <h1>Fashion Lorrem</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/slideshow2copy.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block words">
                    <h5 class="fw-normal font">SMOTHING IS BETTER</h5>
                    <h1>Fashion Lorrem</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/slideshow1copy.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block words">
                    <h5 class="fw-normal font">SMOTHING IS BETTER</h5>
                    <h1>Fashion Lorrem</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden ">Next</span>
        </button>
    </div>
    <!-- end Slide show -->
    <!-- Hot collection -->
    <div class="container mt-4 row text-center collection">
        <div class="col women position-relative">
            <div class="position-absolute button text-center">
                <button class=" btn border text-light">View Collection</button>
            </div>
            <img src="imgs/women.jpg" class="w-100 hov" alt="women collection">
            <div class="text-start mt-4">
                <h5 class="hot fw-lighter">Hot Collection</h5>
                <h4>New Trend For Women</h4>
                <p class="fw-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quo autem numquam modi inventore. Id porro, dicta
                    vero consequuntur dolor corrupti</p>
                <button class="btn border border-dark ps-4 pe-4 mora">Shop Now</button>
            </div>
        </div>
        <div class="col men">
            <div class="position-relative">
                <div class="position-absolute button mt-5">
                    <button class=" btn border text-light">View Collection</button>
                </div>
                <img src="imgs/bag.jpg" class="w-75 mb-4 pho hov" alt="bags collection">
            </div>
            <div class="position-relative">
                <div class="position-absolute button mt-5">
                    <button class="btn border text-light">View Collection</button>
                </div>
                <img src="imgs/man.jpg" class="w-75 pho hov" alt="men collection">
            </div>
        </div>
    </div>
    <!-- end Hot collection -->
    <!-- featured items -->
    <div class="container mt-5 text-center">
        <div class="row feau">
            <div class="col bord mt-3"></div>
            <div class="col fw-bold featured mt-1"> Featured Items</div>
            <div class="col bord mt-3"></div>
        </div>
    </div>
    <div class="container text-center w-50 mt-4">
        <div class="row ">
            <a href="{{ route('allproduct') }}" class="col btn border-0">All</a>
            @foreach ($categories as $category)
                <a href="{{ route('show', $category->id) }}" class="col btn border-0">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="contianer items">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 item position-relative mt-4">
                    <a href="{{ url('showitem' , $product->id ) }}"><img src="{{ asset('img') }}/{{ $product->image }}" class="woman img" alt="women"></a>
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
                        <a href="{{url('showitem' , $product->id )}}"><i class="fa-solid fa-cart-shopping rounded-circle border p-2"></i></a>
                        <a href=""><i class="fa-solid fa-share rounded-circle border p-2"></i></a>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="tao text-center">
            <div class="row g-0 mt-5 me-5 position-relative">
                <div class="col">
                    <img src="imgs/slideshow1copy.jpg" class="w-100" alt="Tao Kiben">
                    <div class="position-absolute na  text-light">
                        <p class="fs-1 fw-bold">70%</p>
                        <p>off</p>
                        <p class="fw-bold">Tao Kinben Na?</p>
                    </div>
                </div>
                <div class="col">
                    <img src="imgs/man6.jpg" class="w-100" alt="AMR SHEHARA KHARAP NA">
                    <div class="position-absolute dia fw-bold text-light">
                        <p class="fw-light">AMR SHEHARA KHARAP NA</p>
                        <h4 class="fw-bold"><Span> Chahara </Span> Dia Ki hoy</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured items -->
    <!-- trending items -->
    <div class="container mt-5 text-center ">
        <div class="row feau">
            <div class="col bord mt-3"></div>
            <div class="col fw-bold featured mt-1">Trending Item</div>
            <div class="col bord mt-3"></div>
        </div>
    </div>
    <div class="container text-center w-25 mt-4 ">
    </div>
    <div class="contianer items">
        <div class="row">
                @foreach ($products as $product)
                @if ($product->type_of_product == '3' )
                    <div class="col-lg-3 col-md-4 col-sm-6 item position-relative mt-4">
                        <a href="{{ route('showitem', $product->id) }}"><img src="{{ asset('img') }}/{{ $product->image }}" class="woman img" alt="women"></a>
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
            
                @endif
                @endforeach
            
        </div>
        <button class="btn border border-dark rounded-0 mt-4 more mb-4 px-5 ">LOAD MORE</button>
    </div>
    <div class="container position-relative sho">
        <img src="imgs/shoes.jpg" class="w-100 shoes mt-5" alt="photo">
        <div class="position-absolute top-50 start-50 translate-middle text-center mt-4">
            <h1 class="fs-1 fw-bold">،،</h1>
            <p class="text-light fs-6">"Nunc vulputate odio vitae sapien euismod rhoncus. Vestibulum onte orci,
                elemnt molestie sed, efficitur a augue, Quisque placerat laoreet Lorem"</p>
            <img src="imgs/shahin allam.jpg" class="ceo mt-5" alt="ceo">
            <h4 class="text-light fs-6 mt-2">MD SHAHIN ALAM</h4>
            <p class="ttcm fs-6">Ceo of TTCM</p>
        </div>
    </div>
    <!-- end trending items -->
@endsection
