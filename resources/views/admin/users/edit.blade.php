@extends('layouts.admin')

@section('content')
    <form class="container mt-5 w-75 mb-5 create" method="post" action="{{route('users.update', $users->id)}}">
        @csrf
        @method("PUT")
        <h1 class="text-center mb-4 new">Edit Member infromation</h1>
        <div class="mb-3">
            <label for="exampleInputUser1" class="form-label fw-bold">User name</label>
            <input type="text" class="form-control rounded-0 border-dark @error('name') is-invalid @enderror" 
             placeholder="Your Name.." name="name" value="{{$users->name}}" readonly>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
            <input type="email" class="form-control rounded-0 border-dark @error('email') is-invalid @enderror"
             placeholder="Email Here.." name="email" value="{{$users->email}}" readonly>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control rounded-0 border-dark @error('password') is-invalid @enderror"
             placeholder="Password Here.."
                name="password" value="{{$users->password}}" readonly>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <select class="form-select rounded-0 border-dark mt-5" aria-label="Default select example" name="role_id" >
            <option selected>Select Your Role</option>
            @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
          </select>
        <button type="submit" class="btn border rounded-0 sub border-dark fw-bold mt-4">Update</button>
    </form>
@endsection 
