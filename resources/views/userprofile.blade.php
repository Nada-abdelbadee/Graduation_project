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
    <!-- navbar fashion -->
    <nav class="navbar navbar-expand-lg fashion mt-4 ">
        <div class="container">
            <a class="navbar-brand me-5 text-light name" href="#">Fashion</a>
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
                        <a class="nav-link" href="#">Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('addtocart' , Auth::user()->id)}}">MyCart</a>
                    </li>
                  <li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                            href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{ route('userprofile', Auth::user()->id) }}" >
                                My Account
                            </a>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar fashion -->
    <form class="container mt-5 w-75 mb-5 create" method="post" action="{{route('users.update', $users->id)}}">
        @csrf
        @method("PUT")
        <h1 class="text-center mb-4 new">Edit Your infromation</h1>
        <div class="mb-3">
            <label for="exampleInputUser1" class="form-label fw-bold">User name</label>
            <input type="text" class="form-control rounded-0 border-dark @error('name') is-invalid @enderror" 
             placeholder="Your Name.." name="name" value="{{$users->name}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
            <input type="email" class="form-control rounded-0 border-dark @error('email') is-invalid @enderror"
             placeholder="Email Here.." name="email" value="{{$users->email}}" >
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control rounded-0 border-dark @error('password') is-invalid @enderror"
             placeholder="Password Here.."
                name="password" value="{{$users->password}}" >
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn border rounded-0 sub border-dark fw-bold mt-4">Update</button>
    </form>




    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
</body>

</html>
