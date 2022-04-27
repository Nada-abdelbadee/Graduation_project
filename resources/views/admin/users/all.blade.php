@extends('layouts.admin')

@section('content')
    <h1 class="text-center mt-5">All Users</h1>
    <div class="container mt-5 tab">
        <table class="table text-center">
            <thead>
              <tr>
                {{-- <th scope="col">Id</th> --}}
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Created_at</th>
                <th scope="col">Role</th>
                <th scope="col">Control</th>
              </tr>
            </thead>
           <tbody>
            @foreach ($users as $user)
            <tr>
              {{-- <th scope="row"></th> --}}
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at}}</td>
              <td>{{$user->role_id}}</td>
              <td class="d-flex del">
                  <a href="{{route('users.show', $user->id)}}" class="btn show rounded-0 border-dark">Show</a>
                  <form method="post" action="{{route('users.destroy',$user->id)}}">
                      @csrf
                      @method("DELETE")
                  <input type="submit" class="btn show rounded-0 border-dark ms-2" value="Delete">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table> 
          <a href="{{route('users.create')}}" class="btn fw-bold show rounded-0 border-dark mb-5">Add User</a>
    </div>
@endsection
