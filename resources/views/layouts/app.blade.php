<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduation project (E-commerce)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Homemade+Apple&family=Mr+Dafoe&family=Ole&family=Pacifico&family=Satisfy&family=Send+Flowers&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    
</head>

<body>

    <!-- navbar1 -->
    <nav class="navbar navbar-expand-lg navbar-light nav1">
        <div class="container">
            <span class="navbar-text">
                Free Shipping on All orders Over $75!
            </span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Wishlist</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-4" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Currency:Usd
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    {{-- <a class="nav-link me-2" href="{{route ('addtocart' , Auth::user()->id)}}"><i class="fa-solid fa-cart-shopping me-2"></i> My cart</a> --}}
                </li>
                <li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="inline nav-link" href="{{route ('addtocart' , Auth::user()->id)}}"><i class="fa-solid fa-cart-shopping me-2"></i> My cart</a>
                        <a id="navbarDropdown" class="inline nav-link dropdown-toggle"
                            href="{{url('/')}}" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        
                        
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('userprofile', Auth::user()->id) }}" >
                                My Account
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                           

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </li>
               

            </ul>
        </div>
    </nav>
    <!-- end navbar1 -->
    <!-- search navbar -->
    <nav class="mt-4">
        <div class="container">
            <form class="text-center form position-relative" type="get" action="{{ url('/search') }}">
                <input class="rounded-pill me-2 search" name="query" type="search"
                    placeholder="search here what you need.." aria-label="Search">
                <div class="position-absolute glass">
                    <button class="btn border-0 light"><i class="fa-solid fa-magnifying-glass "></i></button>
                </div>
            </form>
        </div>
    </nav>
    <!-- end search navbar -->
    <!-- navbar fashion -->
    <nav class="navbar navbar-expand-lg fashion mt-4 ">
        <div class="container">
            <a class="navbar-brand me-5 text-light name" href="{{url('admin')}}">Fashion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto icon">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show1') }}">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show2') }}">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show3') }}">Footwear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show4') }}">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show5') }}">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show6') }}">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar fashion -->


    @yield('content')

    <!-- latest blog -->
    <div class="container">
        <div class="mt-5 text-center">
            <div class="row feau">
                <div class="col bord mt-3"></div>
                <div class="col fw-bold featured mt-1">Latest Blog</div>
                <div class="col bord mt-3"></div>
            </div>
        </div>
        <div class="row g-0 blog mt-4">
            <div class="col pe-3">
                <img src="{{ URL::asset('imgs/blog1.jpg') }}" class="w-100" alt="blog">
                <p class="fs-2 text ">Some Healines Here</p>
                <p class="w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ad autem
                    mollitia officiis sequi
                    laudantium quod reiciendis vitae architecto voluptatem!</p>
                <button class="btn border border-dark px-4 rounded-0 mora">Read More</button>
            </div>
            <div class="col pe-3">
                <img src="{{ URL::asset('imgs/blog2.jpg') }}" class="w-100" alt="blog">
                <p class="fs-2 text ">Some Healines Here</p>
                <p class="w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ad autem
                    mollitia officiis sequi
                    laudantium quod reiciendis vitae architecto voluptatem!</p>
                <button class="btn border border-dark px-4 rounded-0 mora">Read More</button>
            </div>
            <div class="col">
                <img src="{{ URL::asset('imgs/blog3.jpg') }}" class="w-100" alt="blog">
                <p class="fs-2 text ">Some Healines Here</p>
                <p class="w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ad autem
                    mollitia officiis sequi
                    laudantium quod reiciendis vitae architecto voluptatem!</p>
                <button class="btn border border-dark px-4 rounded-0 mora">Read More</button>
            </div>
        </div>
    </div>

    <!-- end latest blog -->
    <!-- shop by brand -->
    <div class="container text-center mt-5">
        <div class="row feau">
            <div class="col bord mt-3"></div>
            <div class="col fw-bold featured mt-1">Shop By Brand</div>
            <div class="col bord mt-3"></div>
        </div>
        <div class="row mt-5 hand ms-4">
            <div class="col">
                <p><i class="fa-regular fa-hand-point-right"></i> themeforest</p>
            </div>
            <div class="col">
                <p><i class="fa-regular fa-hand-point-right"></i> themeforest</p>
            </div>
            <div class="col">
                <p><i class="fa-regular fa-hand-point-right"></i> themeforest</p>
            </div>
            <div class="col">
                <p><i class="fa-regular fa-hand-point-right"></i> themeforest</p>
            </div>
        </div>
    </div>
    <div class="bg-dark by mt-5">
        <div class="container me-5">
            <div class="row text-start">
                <div class="col text-light mt-5">
                    <h5>SHOPS</h5>
                    <div class="shop w-75 text-start mt-3">
                        <button class="btn">New In</button><br>
                        <button class="btn">Women</button><br>
                        <button class="btn">Men</button><br>
                        <button class="btn">Schuhe Shoes</button>
                        <button class="btn">Bags & Accessories</button>
                        <button class="btn">Top Brands</button>
                        <button class="btn">Sale & Specialoffers</button>
                        <button class="btn">Lookbook</button>
                    </div>
                </div>
                <div class="col text-light mt-5">
                    <h5>INFORMATION</h5>
                    <div class="shop w-75 text-start mt-3">
                        <button class="btn">About us</button><br>
                        <button class="btn">Customer Service</button>
                        <button class="btn">New Collection</button><br>
                        <button class="btn">Best Sellers</button><br>
                        <button class="btn">Manufactures</button><br>
                        <button class="btn">Privacy policy</button>
                        <button class="btn">Terms & Condition</button><br>
                        <button class="btn">Blog</button>
                    </div>
                </div>
                <div class="col text-light mt-5">
                    <h5>CUSTOMER SERVICE</h5>
                    <div class="shop w-75 text-start mt-3">
                        <button class="btn">Search Terms</button>
                        <button class="btn">Advanced search</button>
                        <button class="btn">Orders & Returns</button>
                        <button class="btn">Contact US</button><br>
                        <button class="btn">RSS</button><br>
                        <button class="btn">Help & FAQs</button><br>
                        <button class="btn">Consultant</button><br>
                        <button class="btn">Store Locations</button>
                    </div>
                </div>
                <div class="col text-light mt-5">
                    <h5>NEWSELLER</h5>
                    <div class="shop w-75 text-start mt-3">
                        <p>Sign Up for News Letter</p>
                        <input type="email" class="form-control bg-dark rounded-0 form-data "
                            placeholder="Type Your E-mail">
                        <button class="btn rounded-0 mt-4 sub">Subscribe</button>
                        <div class="g-0 font ms-3 w-100 mt-3">
                            <i class="fa-brands fa-facebook-square"></i>
                            <i class="fa-brands fa-twitter-square"></i>
                            <i class="fa-brands fa-behance-square"></i>
                            <i class="fa-brands fa-tumblr-square"></i>
                            <i class="fa-brands fa-vimeo-square"></i>
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end shop by brand -->
    <!-- footer -->
    <div class="footer">
        <div class="store mt-4">@2014 ELLA Fashion Store Shopify.All Rights Reserved.Ecommerce Software By Shopify
        </div>
        <div class="row text-light container foot">
            <div class="col fw-bold visa">Visa</div>
            <div class="col fw-bold">Master Card</div>
            <div class="col fw-bold">PayPal</div>
        </div>
    </div>
    <!-- end footer -->





    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
