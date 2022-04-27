@extends('layouts.admin')

@section('content')
    <h1 class="text-center mt-5">All Roles</h1>
    <div class="container mt-5 tab">
        <table class="table text-center">
            <thead>
              <tr>
                {{-- <th scope="col">Id</th> --}}
                <th scope="col">Id</th>
                <th scope="col">Role</th>
                <th scope="col">Control</th>
              </tr>
            </thead>
           <tbody>
            @foreach ($roles as $role)
            <tr>
              <td>{{$role->id}}</td>
              <td>{{$role->name}}</td>
               <td class="dele">
                  <a href="{{route('roles.show', $role->id , $role->name)}}" class="btn show rounded-0 border-dark me-2">Show</a>
              </td> 
            </tr>
            @endforeach
          </tbody>
          </table> 
    </div>
@endsection
